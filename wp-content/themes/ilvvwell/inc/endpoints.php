<?php
/**
 * Endpoints
 *
 * @package ilvvwell
 * @since 1.0.0
 */

// Get posts  of type "wp_template"
function get_wp_template_posts( $request ) {
    $args = array(
        'post_type' => 'wp_template',
        'posts_per_page' => -1,
    );

    $query = new WP_Query( $args );
    $posts = $query->get_posts();

    return $posts;
}

// Register endpoints
function register_custom_rest_route() {
    register_rest_route( 'wp/v2', '/wp_template', array(
        'methods' => 'GET',
        'callback' => 'get_wp_template_posts',
    ));
}
add_action( 'rest_api_init', 'register_custom_rest_route' );