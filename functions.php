<?php
function enqueue_tailwindcss_and_theme_styles() {
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@^3.0/dist/tailwind.min.css');

    // Enqueue your theme's stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_tailwindcss_and_theme_styles');
?>
