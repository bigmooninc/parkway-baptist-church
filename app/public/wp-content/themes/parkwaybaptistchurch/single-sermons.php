<?php

$terms = wp_get_post_terms( $post->ID, 'series');
$terms_ids = [];

foreach ( $terms as $term ) {
    $terms_ids[] = $term->term_id;
}

$args = array(
  'post_type' => 'sermons',
  'post__not_in' => array($post->ID),
    'order' => 'DESC',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'series',
            'field' => 'term_id',
            'terms' => $terms_ids
        )
    )

);

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['other_sermons'] = Timber::get_posts($args);
Timber::render('templates/sermon.twig', $context);