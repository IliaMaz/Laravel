<?php

require_once './Models/Movie.php';
require_once './Models/Comment.php';

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

    public function getOneMovie($id)
    {
        $db = $this->connectDB();
        $results = $db->query('SELECT id, title, description, realease_date FROM movies WHERE id = ' . $id);
        $results->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_UNIQUE, 'Movie');
        $results->execute();
        return $results->fetch();
    }

    public function getComments($id)
    {
        $db = $this->connectDB();
        $results = $db->query('SELECT id, comment, movie_id FROM comments WHERE movie_id = ' . $id);
        return $results->fetchAll(PDO::FETCH_CLASS, 'Comment');
    }

    public function getMovieWithComments($id)
    {
        $db = $this->connectDB();
        $query = 'SELECT m.*, c.*
                    FROM movies AS m, comments AS c
                    WHERE m.id = ' . $id . ' 
                    AND m.id = c.movie_id';
        $results = $db->query($query);
        $results->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_UNIQUE, ['Movie', 'Comment']);
        // $results->setFetchMode(PDO::FETCH)
        $results->execute();
        return $results->fetch();
    }
}
