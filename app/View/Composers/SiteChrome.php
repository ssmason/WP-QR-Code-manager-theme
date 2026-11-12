<?php
/**
 * Header and footer view composer.
 *
 * @package QrCodeManager
 */

namespace App\View\Composers;

use App\Patterns\SyncedPattern;
use Roots\Acorn\View\Composer;

/**
 * Provides the rendered header and footer to sections/header and
 * sections/footer. Both are synced patterns ("Header", "Footer") so they can
 * be edited in wp-admin under Appearance → Patterns.
 */
class SiteChrome extends Composer {

	/**
	 * Views served by this composer.
	 *
	 * @var array<int, string>
	 */
	protected static $views = array(
		'sections.header',
		'sections.footer',
	);

	/**
	 * Data passed to the views.
	 *
	 * @return array<string, string>
	 */
	public function with(): array {
		// Synced patterns skip the_content, so shortcodes ([social_links]) run here.
		return array(
			'headerContent' => do_shortcode( SyncedPattern::render( 'Header' ) ),
			'footerContent' => do_shortcode( SyncedPattern::render( 'Footer' ) ),
		);
	}
}
