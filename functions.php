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

<<<<<<< HEAD
function shop_enable_woocommerce() {
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce");
=======
function enqueue_custom_scripts() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );
    
    // Optionally, MDB CSS if you're using it
    // wp_enqueue_style( 'mdb-css', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css', array(), '6.0.0' );

    // Your Theme's CSS
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

    // Bootstrap JS (includes Popper.js)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true );

    // Optionally, MDB JS if you're using it
    // wp_enqueue_script( 'mdb-js', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js', array('bootstrap-js'), '6.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
>>>>>>> 08c250420dd329beee34a01a9e49e83fafb9d3f7


