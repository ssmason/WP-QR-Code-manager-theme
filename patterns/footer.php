<?php
/**
 * Title: Site footer
 * Slug: qr-code-manager/footer
 * Categories: footer
 * Description: Brand, links, helpful QR code resources and Satori Digital links (external links open in a new window). Saved as the synced pattern "Footer", which the theme layout renders.
 * Inserter: true
 *
 * @package QrCodeManager
 */

$qr_code_manager_logo = \Illuminate\Support\Facades\Vite::asset( 'resources/images/brand/satori-logo-white.png' );
?>
<!-- wp:group {"className":"site-footer","layout":{"type":"default"}} -->
<div class="wp-block-group site-footer"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"site-footer__logo"} -->
<figure class="wp-block-image size-full site-footer__logo"><a href="https://satori-digital.com/" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( $qr_code_manager_logo ); ?>" alt="Satori Digital"/></a></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"className":"site-footer__muted"} -->
<p class="site-footer__muted">QR code price lists and menus that stay up to date — designed, hosted and supported by Satori Digital.</p>
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
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/#how-it-works">How it works</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/#faq">Questions</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"site-footer__heading"} -->
<p class="site-footer__heading">Good to know</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://en.wikipedia.org/wiki/QR_code" target="_blank" rel="noreferrer noopener">What is a QR code?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://support.apple.com/guide/iphone/scan-a-qr-code-iphe8bda8762/ios" target="_blank" rel="noreferrer noopener">Scanning on iPhone</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://support.google.com/camerafromgoogle/answer/12033278?hl=en" target="_blank" rel="noreferrer noopener">Scanning on Android</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"site-footer__heading"} -->
<p class="site-footer__heading">Satori Digital</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://satori-digital.com/" target="_blank" rel="noreferrer noopener">Websites &amp; SEO</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://3dprinting.satori-digital.com/" target="_blank" rel="noreferrer noopener">3D-printed QR stands &amp; signs</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className":"site-footer__bottom"} -->
<p class="site-footer__bottom">© <?php echo esc_html( gmdate( 'Y' ) ); ?> QR Code Manager · A <a href="https://satori-digital.com/" target="_blank" rel="noreferrer noopener">Satori Digital</a> product</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
