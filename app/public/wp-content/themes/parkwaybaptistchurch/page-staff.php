<?php

/*
 * Template Name: Staff
 */

$args = array(
    'post_type' => 'staff',
    'order' => 'ASC'
);

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['staff_members'] = Timber::get_posts($args);
Timber::render( 'pages/staff.twig', $context );