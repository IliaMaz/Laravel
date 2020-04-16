<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function showAll()
    {
        $books = DB::select('SELECT * FROM books');
        return view('books', ['books' => $books]);
    }

    public function create()
    {
        return view('create-book');
    }

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

    public function editPage()
    {
        return view('edit-book');
    }

    public function update(Request $request, $id)
    {
        // Not done obviously // 13 hrs on pc... 
    }
}
