<?php

$context = Timber::get_context();
$term = new TimberTerm();
$context['series'] = $term;
Timber::render('templates/series.twig', $context);