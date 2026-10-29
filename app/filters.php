<?php
/**
 * Theme filters.
 *
 * @package QrCodeManager
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 */
add_filter(
	'excerpt_more',
	function (): string {
		return sprintf( ' &hellip; <a href="%s">%s</a>', get_permalink(), __( 'Continued', 'qr-code-manager' ) );
	}
);
