<?php
/**
 * Landing page editor styles.
 *
 * @package QrCodeManager
 */

namespace App\Landing;

use Illuminate\Support\Facades\Vite;
use WP_Block_Editor_Context;

/**
 * Loads the landing styles into the block editor for Landing pages only.
 *
 * Other pages — including Satori Manifest client pages, which have their own
 * design styles — keep their own look in the editor.
 */
class LandingEditorStyles {

	/**
	 * Registers the editor settings filter.
	 *
	 * @return void
	 */
	public static function register(): void {
		add_filter( 'block_editor_settings_all', array( self::class, 'add_styles' ), 10, 2 );
	}

	/**
	 * Adds resources/css/landing-editor.css when editing a Landing page.
	 *
	 * Hooked to 'block_editor_settings_all'.
	 *
	 * @param  array<string,mixed>     $settings  Editor settings.
	 * @param  WP_Block_Editor_Context $context   Editor context.
	 * @return array<string,mixed>
	 */
	public static function add_styles( array $settings, WP_Block_Editor_Context $context ): array {
		$post = $context->post ?? null;

		if ( $post instanceof \WP_Post && LandingAccess::is_landing_page( $post->ID ) ) {
			$settings['styles'][] = array(
				'css' => "@import url('" . Vite::asset( 'resources/css/landing-editor.css' ) . "')",
			);
		}

		return $settings;
	}
}
