<?php
/**
 * Title: Site footer
 * Slug: qr-code-manager/footer
 * Categories: footer
 * Description: Brand, links and small print. Saved as the synced pattern "Footer", which the theme layout renders.
 * Inserter: true
 */
?>
<!-- wp:group {"className":"site-footer","layout":{"type":"default"}} -->
<div class="wp-block-group site-footer"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"className":"site-footer__muted"} -->
<p class="site-footer__muted">QR code price lists and menus that stay up to date.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"site-footer__heading"} -->
<p class="site-footer__heading">Get started</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/register/' ) ); ?>">Register your business</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wp_login_url() ); ?>">Client log in</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"site-footer__heading"} -->
<p class="site-footer__heading">Learn more</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/#how-it-works">How it works</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/#faq">Questions</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className":"site-footer__bottom"} -->
<p class="site-footer__bottom">© QR Code Manager</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
