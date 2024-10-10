<?php
// Enable dynamic title tag
function mysa_title() {
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "mysa_title");

// Disable Gutenberg for pages
function mysa_disable_gutenberg() {
    remove_post_type_support("page", "editor");
}
add_action("init", "mysa_disable_gutenberg");

// custom blos post types
function create_blog_post_types() {
    register_post_type('non_featured_blog',
        array(
            'labels'      => array(
                'name'          => __('Non-Featured Blogs'),
                'singular_name' => __('Non-Featured Blog'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_blog_post_types');

// Load resources (styles and scripts)
function mysa_load_resources() {
    // Google Fonts loaded separately
    wp_enqueue_style("roboto-font", "https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap");
    wp_enqueue_style("oxygen-font", "https://fonts.googleapis.com/css2?family=Oxygen:wght@300;700&display=swap");
    wp_enqueue_style("kurale-font", "https://fonts.googleapis.com/css2?family=Kurale&display=swap");
    wp_enqueue_style("lato-font", "https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

    // Bootstrap 5 CSS
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css");

    // Custom styles and AOS CSS
    wp_enqueue_style("mysa-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("aos", "https://unpkg.com/aos@next/dist/aos.css");

    // Custom JS, AOS JS, and Bootstrap 5 JS
    wp_enqueue_script("mysa-js", get_template_directory_uri() . "/js/script.js", array('jquery', 'bootstrap'), false, true);
    wp_enqueue_script("aos", "https://unpkg.com/aos@next/dist/aos.js", array(), false, true);
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "mysa_load_resources");

