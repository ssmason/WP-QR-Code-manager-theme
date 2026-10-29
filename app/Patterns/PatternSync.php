<?php
/**
 * Pattern sync: theme patterns → site content.
 *
 * @package QrCodeManager
 */

namespace App\Patterns;

use WP_Block_Patterns_Registry;

/**
 * Copies the theme's pattern files into the site.
 *
 * Patterns in patterns/ are the source of truth for the marketing site. This
 * writes their current markup to the synced "Header" and "Footer" patterns
 * and to the Home and Register pages (creating any that are missing), so a
 * design change in code reaches the live site with one command:
 *
 *   wp qr-code-manager sync-patterns
 */
class PatternSync {

	/**
	 * Synced patterns: title => pattern slug.
	 *
	 * @var array<string,string>
	 */
	public const SYNCED = array(
		'Header' => 'qr-code-manager/header',
		'Footer' => 'qr-code-manager/footer',
	);

	/**
	 * Landing pages: page path => array( title, pattern slug ).
	 *
	 * @var array<string,array<int,string>>
	 */
	public const PAGES = array(
		'home'     => array( 'Home', 'qr-code-manager/landing-home' ),
		'register' => array( 'Register', 'qr-code-manager/landing-register' ),
	);

	/**
	 * Writes every pattern to the site.
	 *
	 * @return array<int,string> One line per item written.
	 */
	public static function run(): array {
		wp_get_theme()->delete_pattern_cache();

		$log = array();

		foreach ( self::SYNCED as $title => $slug ) {
			$log[] = self::sync_pattern( $title, self::content( $slug ) );
		}

		foreach ( self::PAGES as $path => $page ) {
			$log[] = self::sync_page( $path, $page[0], self::content( $page[1] ) );
		}

		return $log;
	}

	/**
	 * Returns a registered pattern's markup (PHP in the file already run).
	 *
	 * @param  string $slug  Pattern slug, e.g. "qr-code-manager/header".
	 * @return string
	 */
	public static function content( string $slug ): string {
		$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( $slug );

		return $pattern ? (string) $pattern['content'] : '';
	}

	/**
	 * Creates or updates a synced pattern.
	 *
	 * @param  string $title    Pattern title.
	 * @param  string $content  Block markup.
	 * @return string  Log line.
	 */
	private static function sync_pattern( string $title, string $content ): string {
		$id     = SyncedPattern::id( $title );
		$result = wp_insert_post(
			wp_slash(
				array(
					'ID'           => $id,
					'post_type'    => 'wp_block',
					'post_status'  => 'publish',
					'post_title'   => $title,
					'post_content' => $content,
				)
			),
			true
		);

		if ( is_wp_error( $result ) ) {
			return $title . ': ' . $result->get_error_message();
		}

		return sprintf( '%s pattern #%d %s', $title, $result, $id ? 'updated' : 'created' );
	}

	/**
	 * Creates or updates a landing page (Home also becomes the front page).
	 *
	 * @param  string $path     Page path (slug).
	 * @param  string $title    Page title.
	 * @param  string $content  Block markup.
	 * @return string  Log line.
	 */
	private static function sync_page( string $path, string $title, string $content ): string {
		$page   = get_page_by_path( $path );
		$result = wp_insert_post(
			wp_slash(
				array(
					'ID'            => $page ? $page->ID : 0,
					'post_type'     => 'page',
					'post_status'   => 'publish',
					'post_title'    => $title,
					'post_name'     => $path,
					'post_content'  => $content,
					'page_template' => \App\Landing\LandingAccess::TEMPLATE,
				)
			),
			true
		);

		if ( is_wp_error( $result ) ) {
			return $title . ': ' . $result->get_error_message();
		}

		if ( 'home' === $path ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $result );
		}

		return sprintf( '%s page #%d %s', $title, $result, $page ? 'updated' : 'created' );
	}
}
