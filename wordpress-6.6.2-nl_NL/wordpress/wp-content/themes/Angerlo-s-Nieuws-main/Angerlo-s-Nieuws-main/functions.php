<?php
function angerlosnieuws_enqueue_styles() {
    // Enqueue your theme's main stylesheet
    wp_enqueue_style('angerlosnieuws-style', get_stylesheet_uri());

    // Optionally, you can add custom stylesheets if they are separate
    // wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');
}
add_action('wp_enqueue_scripts', 'angerlosnieuws_enqueue_styles');
?>