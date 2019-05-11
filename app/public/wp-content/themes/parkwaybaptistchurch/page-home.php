<?php

/*
 * Template Name: Home
 */

$current_series = Timber::get_terms('series', array('number' => 1, 'orderby' => 'ID', 'order' => 'DESC'));

$args = array(
    'post_type' => 'sermons',
    'posts_per_page' => 1,
);


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['current_series'] = $current_series;
$context['is_front_page'] = 'true';
$context['recent_sermon'] = Timber::get_posts($args);
Timber::render( array( 'pages/home.twig', 'pages/page.twig' ), $context );