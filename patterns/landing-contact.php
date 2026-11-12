<?php
/**
 * Title: Landing - Contact
 * Slug: qr-code-manager/landing-contact
 * Categories: featured
 * Description: Contact page intro with the Satori Manifest contact form block. Use with the Landing page template.
 * Inserter: true
 *
 * @package QrCodeManager
 */

?>
<!-- wp:group {"className":"landing-section landing-register-intro"} -->
<div class="wp-block-group landing-section landing-register-intro"><!-- wp:paragraph {"className":"landing-eyebrow"} -->
<p class="landing-eyebrow">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Questions? Get in touch</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"landing-lead"} -->
<p class="landing-lead">Ask us anything about Qrable, your price list or printed QR codes. We usually reply within one working day. You can also email <a href="mailto:hello@qrable.net">hello@qrable.net</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:satori-manifest/contact-form /-->

<!-- wp:paragraph {"className":"landing-small-print"} -->
<p class="landing-small-print">Already a client? <a href="<?php echo esc_url( wp_make_link_relative( wp_login_url() ) ); ?>">Log in</a> and use "Need a hand?" on your dashboard.</p>
<!-- /wp:paragraph -->
