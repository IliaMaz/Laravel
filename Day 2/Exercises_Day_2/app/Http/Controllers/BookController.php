<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BookController extends Controller
{
    // ! Use redirect(), some methods need alteration

    // * Show all the books
    public function showAll()
    {
        $books = DB::select('SELECT * FROM books');
        return view('books', ['books' => $books]);
    }
    // * Show the create-book page
    public function create()
    {
        return view('create-book');
    }
    // * Create the book & Insert into DB
    public function insert(Request $request)
    {
        $titleValid = strlen($request->title) > 0 && strlen($request->title) <= 100;
        $price = intval($request->price);
        $priceValid = is_int($price);
        if ($titleValid && $priceValid) {
            $result = DB::insert('INSERT INTO books(title, price) VALUES (?,?)', [$request->title, $request->price]);
            if ($result)
                return 'Book has been added!';
            else
                return 'Something went wrong...';
        }
    }
    // * Show the edit page for a specific book
    public function editPage($id)
    {
        $book = DB::select('SELECT * FROM books WHERE id = ?', [$id]);
        return view('edit-book', ['book' => $book[0]]);
    }
    // * Update a specific book
    public function update(Request $request, $id)
    {
        $result = DB::update('UPDATE books SET title = ? , price = ? WHERE id = ?', [$request->title, $request->price, $id]);
        if ($result)
            return 'Successfully updated the book: ' . $request->title . '<br> Return to <a href="/books">books list</a>.';
        else
            return 'Something went wrong...';
    }
    // * Delete a specific book
    public function delete(Request $response, $id)
    {
        $deleteResult = DB::delete('DELETE FROM books WHERE id = ?', [$id]);
        // $json = json_encode($response);
        if ($deleteResult)
            return true;
        else
            return 'Something went terribly wrong...';
    }
}
