<?php
/**
 * Landing page access rules.
 *
 * @package QrCodeManager
 */

namespace App\Landing;

/**
 * Only administrators may edit or delete Landing pages (Home, Register).
 *
 * Editors and Satori Manifest clients can still edit their own content; the
 * marketing pages are the business's shop window and stay locked down.
 */
class LandingAccess {

	/**
	 * The Landing page template.
	 *
	 * @var string
	 */
	public const TEMPLATE = 'template-landing.blade.php';

	/**
	 * Registers the capability filter.
	 *
	 * @return void
	 */
	public static function register(): void {
		add_filter( 'map_meta_cap', array( self::class, 'map_meta_cap' ), 10, 4 );
	}

	/**
	 * Requires manage_options to edit or delete a Landing page.
	 *
	 * Hooked to 'map_meta_cap'.
	 *
	 * @param  array<int,string> $caps     Primitive caps required.
	 * @param  string            $cap      Meta capability being checked.
	 * @param  int               $user_id  User ID.
	 * @param  array<int,mixed>  $args     Extra arguments (post ID first).
	 * @return array<int,string>
	 */
	public static function map_meta_cap( array $caps, string $cap, int $user_id, array $args ): array {
		if ( ! in_array( $cap, array( 'edit_post', 'delete_post' ), true ) || empty( $args[0] ) ) {
			return $caps;
		}

		if ( self::is_landing_page( (int) $args[0] ) ) {
			$caps[] = 'manage_options';
		}

		return $caps;
	}

	/**
	 * Returns true when a post uses the Landing template.
	 *
	 * @param  int $post_id  Post ID.
	 * @return bool
	 */
	public static function is_landing_page( int $post_id ): bool {
		return self::TEMPLATE === get_page_template_slug( $post_id );
	}
}
