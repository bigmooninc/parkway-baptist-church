<?php

$series_list = Timber::get_terms('series', array('orderby' => 'ID', 'order' => 'DESC'));

$args = array(
  'number' => 1,
    'orderby' => 'ID',
    'order' => 'DESC'
);
$current_series = Timber::get_terms( $args );

//foreach($series as $sermon_series) {
//    $member_group_query = Timber::get_posts(
//        array(
//            'post_type' => 'sermons',
//            'tax_query' => array(
//                'taxonomy' => 'series',
//            )
//        )
//    );
//    $sermon_series = $member_group_query;
//}


$context = Timber::get_context();
$page = new TimberPost();
$context['post'] = $post;
$context['series'] = $series_list;
$context['current_series'] = $current_series;
Timber::render( 'pages/sermons.twig', $context );