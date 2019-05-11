<?php

$args = array(
    'post_type' => 'ministries',
    'posts_per_page' => -1,
);

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['ministries'] = Timber::get_posts($args);
Timber::render( 'pages/ministries.twig', $context );