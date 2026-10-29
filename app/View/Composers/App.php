<?php
/**
 * Global view composer.
 *
 * @package QrCodeManager
 */

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

/**
 * Data shared with every view.
 */
class App extends Composer {

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = array(
		'*',
	);

	/**
	 * Retrieve the site name.
	 */
	public function siteName(): string {
		return get_bloginfo( 'name', 'display' );
	}
}
