<?php
/**
 * Synced pattern lookup and rendering.
 *
 * @package QrCodeManager
 */

namespace App\Patterns;

/**
 * Finds and renders a synced pattern (wp_block post) by its title.
 *
 * The theme's header and footer are the synced patterns "Header" and
 * "Footer", so administrators can edit them in Appearance → Patterns
 * without touching code. Their starting content lives in patterns/.
 */
class SyncedPattern {

	/**
	 * Returns the ID of the published synced pattern with this title, or 0.
	 *
	 * @param  string $title  Pattern title, e.g. "Header".
	 * @return int
	 */
	public static function id( string $title ): int {
		$posts = get_posts(
			array(
				'post_type'      => 'wp_block',
				'post_status'    => 'publish',
				'title'          => $title,
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'no_found_rows'  => true,
			)
		);

		return $posts ? (int) $posts[0] : 0;
	}

	/**
	 * Renders a synced pattern's blocks, or returns '' when it does not exist.
	 *
	 * @param  string $title  Pattern title.
	 * @return string  Block HTML.
	 */
	public static function render( string $title ): string {
		$id = self::id( $title );

		if ( ! $id ) {
			return '';
		}

		return render_block(
			array(
				'blockName'    => 'core/block',
				'attrs'        => array( 'ref' => $id ),
				'innerHTML'    => '',
				'innerContent' => array(),
				'innerBlocks'  => array(),
			)
		);
	}
}
