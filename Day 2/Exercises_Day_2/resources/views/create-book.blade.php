<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a book</title>
</head>
<body>
<h3>Create a book</h3>
    <form method="post">
        @csrf 
        <input type="text" name="title" required> <br>
        <input type="number" name="price" required> <br>
        <input type="submit" value="Add it!">
    </form>
</body>
</html>