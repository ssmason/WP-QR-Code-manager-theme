<?php
/**
 * Title: Landing — Register
 * Slug: qr-code-manager/landing-register
 * Categories: featured
 * Description: Registration page intro with the Satori Manifest registration form block. Use with the Landing page template.
 * Inserter: true
 */
?>
<!-- wp:group {"className":"landing-section landing-register-intro"} -->
<div class="wp-block-group landing-section landing-register-intro"><!-- wp:paragraph {"className":"landing-eyebrow"} -->
<p class="landing-eyebrow">Register</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Get your QR price list</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"landing-lead"} -->
<p class="landing-lead">Tell us a little about your business. We review every application personally and email your login details as soon as your page is ready — usually within one working day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:satori-manifest/registration-form /-->

<!-- wp:paragraph {"className":"landing-small-print"} -->
<p class="landing-small-print">Already registered? <a href="<?php echo esc_url( wp_login_url() ); ?>">Log in to your account</a>.</p>
<!-- /wp:paragraph -->
