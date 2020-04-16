<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Edit Movie</h3>
    <form method="POST">
        {{-- csrf is a token used for validation of the user --}}
        @csrf 
        @method('put')
        <input type="text" name="title" value="<?= $movie->title ?>" placeholder="Your title"> <br>
        <input type="submit" value="Insert">
    </form>
</body>
</html>