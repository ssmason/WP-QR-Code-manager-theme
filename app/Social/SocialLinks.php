<?php
/**
 * Social links for the marketing site.
 *
 * @package QrCodeManager
 */

namespace App\Social;

/**
 * Settings → Social links: the business's own profiles, shown as icons wherever
 * the [social_links] shortcode is placed (the Footer pattern by default).
 * Empty fields are skipped, so nothing shows until a link is added.
 */
class SocialLinks {

	/**
	 * Option holding the profile URLs, keyed by platform.
	 *
	 * @var string
	 */
	public const OPTION = 'qr_code_manager_social_links';

	/**
	 * Settings page slug.
	 *
	 * @var string
	 */
	public const PAGE = 'qr-code-manager-social';

	/**
	 * Supported platforms: label and outline icon (24×24, stroke-based).
	 *
	 * @var array<string, array{label: string, icon: string}>
	 */
	private const PLATFORMS = array(
		'instagram' => array(
			'label' => 'Instagram',
			'icon'  => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.6" fill="currentColor"/>',
		),
		'facebook'  => array(
			'label' => 'Facebook',
			'icon'  => '<path d="M15 3h-2.5A3.5 3.5 0 0 0 9 6.5V9H7v3.5h2V21h3.5v-8.5H15l.5-3.5h-3V7a1 1 0 0 1 1-1H15z"/>',
		),
		'linkedin'  => array(
			'label' => 'LinkedIn',
			'icon'  => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10.5V17M8 7.5v.01M12 17v-6.5M12 13.5a2.5 2.5 0 0 1 5 0V17"/>',
		),
		'tiktok'    => array(
			'label' => 'TikTok',
			'icon'  => '<path d="M14 3v11.5a3.5 3.5 0 1 1-3.5-3.5"/><path d="M14 3c.5 2.5 2.5 4.5 5 4.5"/>',
		),
		'youtube'   => array(
			'label' => 'YouTube',
			'icon'  => '<rect x="2.5" y="5.5" width="19" height="13" rx="4"/><path d="m10 9.5 5 2.5-5 2.5z"/>',
		),
	);

	/**
	 * Registers the settings page, setting and shortcode.
	 *
	 * @return void
	 */
	public static function register(): void {
		add_action( 'admin_menu', array( self::class, 'add_page' ) );
		add_action( 'admin_init', array( self::class, 'register_setting' ) );
		add_shortcode( 'social_links', array( self::class, 'shortcode' ) );
	}

	/**
	 * Adds Settings → Social links (administrators only).
	 *
	 * Hooked to 'admin_menu'.
	 *
	 * @return void
	 */
	public static function add_page(): void {
		add_options_page(
			__( 'Social links', 'qr-code-manager' ),
			__( 'Social links', 'qr-code-manager' ),
			'manage_options',
			self::PAGE,
			array( self::class, 'render_page' )
		);
	}

	/**
	 * Registers the option with its sanitizer.
	 *
	 * Hooked to 'admin_init'.
	 *
	 * @return void
	 */
	public static function register_setting(): void {
		register_setting(
			self::PAGE,
			self::OPTION,
			array(
				'type'              => 'array',
				'sanitize_callback' => array( self::class, 'sanitize' ),
				'default'           => array(),
			)
		);
	}

	/**
	 * Keeps known platforms only, as http(s) URLs.
	 *
	 * @param  mixed $input  Submitted values.
	 * @return array<string, string>
	 */
	public static function sanitize( $input ): array {
		$clean = array();

		foreach ( array_keys( self::PLATFORMS ) as $platform ) {
			$url = is_array( $input ) ? trim( (string) ( $input[ $platform ] ?? '' ) ) : '';

			if ( '' !== $url ) {
				$url = esc_url_raw( $url, array( 'http', 'https' ) );
			}

			$clean[ $platform ] = $url;
		}

		return $clean;
	}

	/**
	 * Returns the filled-in links, in display order.
	 *
	 * @return array<string, string>  Platform => URL.
	 */
	public static function links(): array {
		$saved = (array) get_option( self::OPTION, array() );

		return array_filter(
			array_map(
				static fn ( string $platform ): string => (string) ( $saved[ $platform ] ?? '' ),
				array_combine( array_keys( self::PLATFORMS ), array_keys( self::PLATFORMS ) )
			)
		);
	}

	/**
	 * Renders the [social_links] shortcode: a row of icon links, or nothing.
	 *
	 * @return string
	 */
	public static function shortcode(): string {
		$links = self::links();

		if ( empty( $links ) ) {
			return '';
		}

		$items = '';
		foreach ( $links as $platform => $url ) {
			$items .= sprintf(
				'<li><a href="%1$s" target="_blank" rel="noreferrer noopener" aria-label="%2$s"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">%3$s</svg></a></li>',
				esc_url( $url ),
				esc_attr( self::PLATFORMS[ $platform ]['label'] ),
				self::PLATFORMS[ $platform ]['icon']
			);
		}

		return '<ul class="social-links">' . $items . '</ul>';
	}

	/**
	 * Renders the settings page.
	 *
	 * @return void
	 */
	public static function render_page(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$saved = (array) get_option( self::OPTION, array() );
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Social links', 'qr-code-manager' ); ?></h1>
			<p><?php esc_html_e( 'Your business profiles. Each link you add shows as an icon in the site footer; leave a field empty to hide it.', 'qr-code-manager' ); ?></p>

			<form method="post" action="options.php">
				<?php settings_fields( self::PAGE ); ?>
				<table class="form-table" role="presentation">
					<?php foreach ( self::PLATFORMS as $platform => $details ) : ?>
						<tr>
							<th scope="row">
								<label for="social-<?php echo esc_attr( $platform ); ?>"><?php echo esc_html( $details['label'] ); ?></label>
							</th>
							<td>
								<input
									type="url"
									class="regular-text code"
									id="social-<?php echo esc_attr( $platform ); ?>"
									name="<?php echo esc_attr( self::OPTION . '[' . $platform . ']' ); ?>"
									value="<?php echo esc_attr( (string) ( $saved[ $platform ] ?? '' ) ); ?>"
									placeholder="https://"
								/>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}
}
