<?php
// function my_theme_enqueue_styles() {
//     wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
// }
// add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

//** Activation du thème enfant **//

// Empêche l'accès direct
if (!defined('ABSPATH')) {
    exit; // Quitte si accès direct
}

// Enqueue les styles et scripts du thème parent et du thème enfant
function enqueue_parent_child_styles() {
    // Enqueue le style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'enqueue_parent_child_styles');
?>