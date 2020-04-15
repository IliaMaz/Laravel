<?php

/*

    * ROUTER - FRONT CONTROLLER
        * It will handle every request from the user (Ofc you still need to specifiy the GET of the data)
        * Depending on the request it will call a specific controller.
    * localhost/index.php?rqt=movies
*/

// * Get the request from the User
if (isset($_GET['rqt'])) {
    // * Only valid rqsts
    if ($_GET['rqt'] == 'movies') {
        echo 'Request : movies';
        // * Call the movie controller
        require_once './Controllers/MovieController.php';
        $movieCtrler = new MovieController();
        $movieCtrler->movieList();
    }
}
