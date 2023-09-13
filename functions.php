<?php

function get_enqueue() {
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), false);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'get_enqueue');