<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Requests\EditBook;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class BookController extends Controller
{
    // ! Use redirect(), some methods need alteration

    // * Show all the books
    public function index()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }
    // * Show the create-book page
    public function create()
    {
        return view('create-book');
    }
    // * Create the book & Insert into DB
    public function store(Request $request)
    {
        // $titleValid = strlen($request->title) > 0 && strlen($request->title) <= 100;
        // $price = intval($request->price);
        // $priceValid = is_int($price);
        // if ($titleValid && $priceValid) {
        // $result = DB::insert('INSERT INTO books(title, price) VALUES (?,?)', [$request->title, $request->price]);
        $book = new Book;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author_id = rand(1, 10);
        $result = $book->save();
        if ($result)
            // dump($book);
            return redirect('/books');
        else
            return 'Something went wrong...';
        // }
    }
    // * Show the edit page for a specific book
    public function show($id)
    {
        $book = Book::where('id', $id)
            ->first();
        $author = Author::find($book->author_id);
        return view('edit-book', ['book' => $book, 'author' => $author]);
    }
    // * Update a specific book
    public function edit(EditBook $request, $id)
    {
        // * ... Validations
        $request->validated();
        // $result = DB::update('UPDATE books SET title = ? , price = ? WHERE id = ?', [$request->title, $request->price, $id]);
        $book = Book::find($id);
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author_id = rand(1, 10);
        $result = $book->save();
        if ($result)
            return redirect('/books');
        else
            return 'Something went wrong...';
    }
    // * Delete a specific book
    public function destroy(Request $response, $id)
    {
        // $deleteResult = DB::delete('DELETE FROM books WHERE id = ?', [$id]);
        // $json = json_encode($response);
        $destroy = Book::destroy($id);
        if ($destroy)
            return true;
        else
            return 'Something went terribly wrong...';
    }
}
