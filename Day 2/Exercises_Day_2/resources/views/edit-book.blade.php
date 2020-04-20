<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit That Book</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Author: <?= $author->name ?></h3>
    <form method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="<?= $book->title?>" placeholder="Book title..."> <br>
        <input type="number" name="price" value="<?= $book->price?>" placeholder="Book price..."> <br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>