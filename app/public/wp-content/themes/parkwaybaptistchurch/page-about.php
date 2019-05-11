<?php

/*
 * Template Name: About
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( 'pages/about.twig', $context );