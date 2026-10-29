<?php
/**
 * Post view composer.
 *
 * @package QrCodeManager
 */

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

/**
 * Post data for the page header and content partials.
 */
class Post extends Composer {

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = array(
		'partials.page-header',
		'partials.content',
		'partials.content-*',
	);

	/**
	 * Retrieve the post title.
	 */
	public function title(): string {
		if ( $this->view->name() !== 'partials.page-header' ) {
			return get_the_title();
		}

		if ( is_home() ) {
			$home = (int) get_option( 'page_for_posts' );

			if ( $home ) {
				return get_the_title( $home );
			}

			return __( 'Latest Posts', 'qr-code-manager' );
		}

		if ( is_archive() ) {
			return get_the_archive_title();
		}

		if ( is_search() ) {
			return sprintf(
				/* translators: %s is replaced with the search query */
				__( 'Search Results for %s', 'qr-code-manager' ),
				get_search_query()
			);
		}

		if ( is_404() ) {
			return __( 'Not Found', 'qr-code-manager' );
		}

		return get_the_title();
	}

	/**
	 * Retrieve the pagination links.
	 */
	public function pagination(): string {
		return wp_link_pages(
			array(
				'echo'   => 0,
				'before' => '<p>' . __( 'Pages:', 'qr-code-manager' ),
				'after'  => '</p>',
			)
		);
	}
}
