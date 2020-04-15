<?php
// Check its working
var_dump($movie);
// var_dump($comment);
$commentsArr = $movie->__get('_comments');

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

    echo $movie->__get('_id') . '<br>';
    echo $movie->__get('_title') . '<br>';
    echo $movie->__get('_description') . '<br>';
    echo $movie->__get('_realease_date') . '<br>';
    echo '<br>';

    foreach ($commentsArr as $comment) {
        echo 'Comment: ' . $comment->__get('id') . '<br>';
        echo $comment->__get('comment') . '<br>';
        echo $comment->__get('movie_id') . '<br>';
        echo '<hr>';
    }




    ?>
</body>

</html>