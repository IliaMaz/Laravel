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
        echo $movie['title'] . '<br>';
        echo $movie['description'] . '<br>';
        echo $movie['realease_date'] . '<br>';
        echo $movie['director_id'] . '<br>';
    }

    ?>
</body>

</html>