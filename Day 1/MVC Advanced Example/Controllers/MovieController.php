<?php

require_once './Models/MovieModel.php';

class MovieController
{
    private $_model;

    public function __construct()
    {
        $this->_model = new MovieModel();
    }
    // * GET all the movies
    public function movieList()
    {
        // * Do validations, formatting etc... 
        $movies = $this->_model->getMovies();
        require_once './Views/MovieView.php';
    }
    // * GET one movie
    public function movie()
    {
        // ! Just for this case / testing purposes, should be done using variable and get params
        $movie = $this->_model->getOneMovie(5);
        $comment = $this->_model->getComments(5);
        $movie->__set('comments', $comment);
        require_once './Views/MovieView.php';
        // $mov = $this->_model->getMovieWithComments(5);
    }
}
