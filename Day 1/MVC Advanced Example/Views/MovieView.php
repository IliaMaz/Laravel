<?php
// Check its working
var_dump($movies);

?>
<!-- The VIEW -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviez</title>
</head>

<body>
    <?php

    foreach ($movies as $movie) {
        echo $movie->get_id() . '<br>';
        echo $movie->get_title() . '<br>';
        echo $movie->get_description() . '<br>';
        echo $movie->get_release_date() . '<br>';
    }
    // foreach ($movies as $movie) {
    //     echo $movie->_id . '<br>';
    //     echo $movie->_title . '<br>';
    //     echo $movie->_description . '<br>';
    //     echo $movie->_release_date . '<br>';
    // }

    ?>
</body>

</html>