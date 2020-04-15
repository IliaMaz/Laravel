<?php

function getMovies()
{
    // * Connect
    $db = new PDO('mysql:host=localhost:3309;dbname=moviedb;charset=utf8', 'root', '');

    // * Query 
    $results = $db->query('SELECT * FROM movies');
    return $results->fetchAll(PDO::FETCH_ASSOC);
}
