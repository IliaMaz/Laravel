<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a book</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>
</head>
<body>
<h3>Create a book</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form method="post">
        @csrf 
        <input type="text" name="title" required> <br>
        <input type="number" name="price" required> <br>
        <select name="author" required>
            <option value="Author" selected disabled>Author</option>
        @foreach ($authors as $author)
            <option value="<?= $author->id ?>"> <?= $author->name ?> </option>
        @endforeach    
        </select> <br>
        <input type="submit" id="submit" value="Add it!">
    </form>

    <script src="{{asset('js/ajax.js')}}"></script>
</body>
</html>