<?php

$terms = wp_get_post_terms( $post->ID, 'ministry_leaders');
$terms_ids = [];

foreach ( $terms as $term) {
    $terms_ids[] = $term->term_id;
}

$args = array(
    'post_type' => 'ministries',
    'tax_query' => array(
            'taxonomy' => 'ministry_leaders',
            'field' => 'term_id',
            'terms' => $terms_ids,

    )
);

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['ministry_leaders'] = Timber::get_posts($args);
Timber::render( 'templates/ministry.twig', $context );