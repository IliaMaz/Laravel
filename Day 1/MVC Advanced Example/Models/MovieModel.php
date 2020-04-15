<?php

require_once './Models/Movie.php';

class MovieModel
{
    private function connectDB()
    {
        return new PDO('mysql:host=localhost:3309;dbname=moviedb;charset=utf8', 'root', '');
    }

    public function getMovies()
    {
        // * Connect
        $db = $this->connectDB();

        // * Query , Mistake in db column name of release date
        $results = $db->query('SELECT id, title, description, realease_date FROM movies');
        return $results->fetchAll(PDO::FETCH_CLASS, 'Movie');
    }
}
