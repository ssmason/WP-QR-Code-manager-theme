<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'qr-code-manager'));
});

/**
 * Restrict editing and deleting Landing-template pages (Home, Register) to administrators.
 *
 * @return array
 */
add_filter('map_meta_cap', function (array $caps, string $cap, int $userId, array $args) {
    if (! in_array($cap, ['edit_post', 'delete_post'], true) || empty($args[0])) {
        return $caps;
    }

    if (get_page_template_slug((int) $args[0]) === 'template-landing.blade.php') {
        $caps[] = 'manage_options';
    }

    return $caps;
}, 10, 4);
