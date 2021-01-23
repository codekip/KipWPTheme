<?php

function kiptheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('kiptheme-style', get_template_directory_uri() . "/style.css", array('kiptheme-bootstrap'), $version, 'all');
    wp_enqueue_style('kiptheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('kiptheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}



add_action('wp_enqueue_scripts', 'kiptheme_register_styles');
