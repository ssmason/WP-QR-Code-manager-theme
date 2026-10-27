<?php
/**
 * Title: Site header
 * Slug: qr-code-manager/header
 * Categories: header
 * Description: Logo/site name, navigation, log in and Register button. Saved as the synced pattern "Header", which the theme layout renders.
 * Inserter: true
 */
?>
<!-- wp:group {"className":"site-header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group site-header"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"className":"site-header__actions","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group site-header__actions"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"How it works","url":"/#how-it-works","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Designs","url":"/#designs","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"FAQ","url":"/#faq","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Log in","url":"<?php echo esc_url( wp_login_url() ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/register/' ) ); ?>">Register</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
