<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knowledge</title>
</head>
<body>
    @foreach ($books as $book)
    {{$book->title}} <br>
    {{$book->price}} <br>
    <a href="book/update/{{$book->id}}">Edit</a>
    <hr>
    @endforeach
</body>
</html>