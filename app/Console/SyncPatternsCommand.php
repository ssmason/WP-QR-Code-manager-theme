<?php
/**
 * WP-CLI command: sync patterns.
 *
 * @package QrCodeManager
 */

namespace App\Console;

use App\Patterns\PatternSync;
use WP_CLI;

/**
 * WP-CLI: wp qr-code-manager sync-patterns
 *
 * Writes the theme's patterns (patterns/*.php) to the synced Header/Footer
 * patterns and the Home/Register pages. Run after changing a pattern file
 * or rebuilding assets (image URLs in the patterns are versioned).
 */
class SyncPatternsCommand {

	/**
	 * Copies the theme patterns into the site.
	 *
	 * ## EXAMPLES
	 *
	 *     wp qr-code-manager sync-patterns
	 */
	public function __invoke(): void {
		foreach ( PatternSync::run() as $line ) {
			WP_CLI::log( $line );
		}

		WP_CLI::success( 'Patterns synced.' );
	}
}
