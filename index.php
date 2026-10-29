<?php
/**
 * Main template file: renders the Blade view chosen by Sage.
 *
 * @package QrCodeManager
 */

// Blade escapes data inside the templates; this prints the finished view.
echo view( app( 'sage.view' ), app( 'sage.data' ) )->render(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
