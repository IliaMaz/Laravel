<?php

require_once 'MovieModel.php';

$movies = getMovies();

// * Validations

if (count($movies) == 0)
    require_once 'ErrorView.php'; // ? Example
else
    require_once 'MovieView.php';
