<?php
/**
 * Theme setup: supported features and block editor assets.
 *
 * The public marketing site (Home, Register) is built from block patterns in
 * patterns/ and styled by resources/css/landing.css. Client price-list pages
 * are rendered by the Satori Manifest plugin and never load theme assets.
 *
 * @package QrCodeManager
 */

namespace App;

use Illuminate\Support\Facades\Vite;

/**
 * Inject the base editor styles (Tailwind) into the block editor.
 */
add_filter(
	'block_editor_settings_all',
	function ( array $settings ): array {
		$style = Vite::asset( 'resources/css/editor.css' );

		$settings['styles'][] = array(
			'css' => "@import url('{$style}')",
		);

		return $settings;
	}
);

/**
 * Inject the editor scripts and their WordPress dependencies.
 */
add_action(
	'admin_head',
	function () {
		if ( ! get_current_screen()?->is_block_editor() ) {
			return;
		}

		if ( ! Vite::isRunningHot() ) {
			$dependencies = json_decode( Vite::content( 'editor.deps.json' ) );

			foreach ( $dependencies as $dependency ) {
				if ( ! wp_script_is( $dependency ) ) {
					wp_enqueue_script( $dependency );
				}
			}
		}

		// Vite renders trusted script tags for the theme's own built assets.
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo Vite::withEntryPoints(
			array(
				'resources/js/editor.js',
			)
		)->toHtml();
	}
);

/**
 * Use the generated theme.json file.
 */
add_filter(
	'theme_file_path',
	function ( string $path, string $file ): string {
		return 'theme.json' === $file
		? public_path( 'build/assets/theme.json' )
		: $path;
	},
	10,
	2
);

/**
 * Load block CSS on demand: only the styles of blocks a page actually uses,
 * instead of the whole block library (138 KB, render-blocking).
 *
 * @link https://core.trac.wordpress.org/ticket/61965
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * No emoji script or styles: browsers show emoji natively.
 */
add_action(
	'init',
	function () {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_enqueue_scripts', 'wp_enqueue_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	}
);

/**
 * Register the theme features.
 */
add_action(
	'after_setup_theme',
	function () {
		// Classic (Blade) templates; no full-site editing.
		remove_theme_support( 'block-templates' );

		// Only the theme's own patterns appear in the inserter.
		remove_theme_support( 'core-block-patterns' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );

		add_theme_support(
			'html5',
			array(
				'caption',
				'comment-form',
				'comment-list',
				'gallery',
				'search-form',
				'script',
				'style',
			)
		);

		/**
		 * The site logo (Appearance → Customize → Site Identity) is the mark in
		 * the header pattern; the Satori Manifest plugin also uses it as a
		 * fallback logo on the login screen and in emails.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 300,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
	},
	20
);
