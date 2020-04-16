<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Insert form</p>

    <form method="POST">
        {{-- csrf is a token used for validation of the user --}}
        @csrf 
        <input type="text" name="product"> <br>
        <input type="submit" value="Insert">
    </form>
</body>
</html>