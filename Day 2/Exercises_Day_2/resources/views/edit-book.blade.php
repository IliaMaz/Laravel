<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit That Book</title>
</head>
<body>
    <form method="post">
        @csrf
        @method('put')
        <input type="text" name="title" placeholder="Book title...">
        <input type="number" name="price" placeholder="Book price...">
        <input type="submit" value="Edit">
    </form>
</body>
</html>