<?php
/**
 * Theme service provider.
 *
 * @package QrCodeManager
 */

namespace App\Providers;

use App\Console\SyncPatternsCommand;
use App\Landing\LandingAccess;
use App\Landing\LandingEditorStyles;
use Roots\Acorn\Sage\SageServiceProvider;

/**
 * Boots the theme: landing-page rules, editor styles and WP-CLI commands.
 */
class ThemeServiceProvider extends SageServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		parent::boot();

		LandingAccess::register();
		LandingEditorStyles::register();

		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			\WP_CLI::add_command( 'qr-code-manager sync-patterns', SyncPatternsCommand::class );
		}
	}
}
