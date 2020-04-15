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
}
