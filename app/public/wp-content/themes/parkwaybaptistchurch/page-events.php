<?php

/*
 * Template Name: Events
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( 'pages/events.twig', $context );