<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knowledge</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
</head>
<body>
    <h2>Books List</h2>
    <h3>Make a new <a href="/book/create">book</a>.</h3>
    <h3>Order by price:</h3> 
    <a class="orderP"  href="/books/order/asc">Ascending</a>
    <a class="orderP"  href="/books/order/desc">Descending</a>
    <hr>
    <div id="books"></div>
    @foreach ($books as $book)
    {{$book->title}} <br>
    {{$book->price}} <br>
    <a href="book/update/{{$book->id}}">Edit</a>
    <a class="delete" id="{{$book->id}}" href="">Delete</a>
    <hr>
    @endforeach

    {{$books->links()}}

{{-- <script src="{{asset('js/jquery.js')
}}"></script> --}}
<script src="{{asset('js/ajax.js')}}"></script>
</body>
</html>