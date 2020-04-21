<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Requests\EditBook;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // ! Methods altered, view changelogs on github for progression
    // ! In case I haven't deleted the old commented code feel free to read here
    // * Show all the books
    public function index()
    {
        $books = Book::all();
        // * Trying and failing, I'll get you soon E ORM
        // $books = Book::all(
        //     Author::select('id', 'name')
        //         ->whereColumn('author_id', 'author.id')
        //         ->orderBy('id', 'asc')
        // );
        return view('books', ['books' => $books]);
    }
    // * Show the create-book page
    public function create()
    {
        return view('create-book');
    }
    // * Create the book & Insert into DB
    public function store(EditBook $request)
    {
        $request->validated();
        $book = new Book;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author_id = rand(1, 10);
        $result = $book->save();
        if ($result)
            return redirect('/books');
        else
            return 'Something went wrong...';
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
        // * Edit
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
        // * Unused request because I want to do JSON but currently no time
        // $deleteResult = DB::delete('DELETE FROM books WHERE id = ?', [$id]);
        // $json = json_encode($response);
        $destroy = Book::destroy($id);
        if ($destroy)
            return true;
        else
            return 'Something went terribly wrong...';
    }
}
