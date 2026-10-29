<?php
/**
 * Theme bootstrap.
 *
 * Loads Composer's autoloader, boots Acorn (Sage's Laravel container) with
 * the theme service provider, then includes app/setup.php and
 * app/filters.php. Everything else lives in classes under app/.
 *
 * @package QrCodeManager
 */

use App\Providers\ThemeServiceProvider;
use Roots\Acorn\Application;

$qr_code_manager_autoload = __DIR__ . '/vendor/autoload.php';

if ( ! file_exists( $qr_code_manager_autoload ) ) {
	wp_die( esc_html__( 'Error locating the autoloader. Please run composer install in the theme folder.', 'qr-code-manager' ) );
}

require $qr_code_manager_autoload;

/*
 * Boot Acorn when WordPress has loaded the theme. The service provider
 * registers the theme's hooks and WP-CLI commands.
 */
Application::configure()
	->withProviders(
		array(
			ThemeServiceProvider::class,
		)
	)
	->boot();

/*
 * Theme hook files (app/setup.php, app/filters.php).
 */
foreach ( array( 'setup', 'filters' ) as $qr_code_manager_file ) {
	if ( ! locate_template( "app/{$qr_code_manager_file}.php", true, true ) ) {
		wp_die(
			sprintf(
				/* translators: %s: relative file path. */
				esc_html__( 'Error locating %s for inclusion.', 'qr-code-manager' ),
				esc_html( "app/{$qr_code_manager_file}.php" )
			)
		);
	}
}
