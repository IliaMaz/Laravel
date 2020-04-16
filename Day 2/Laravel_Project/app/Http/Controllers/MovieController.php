<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{

    public function edit($id)
    {
        // First ask the db for the movie with $id
        $movie = DB::select('SELECT id, title FROM movies WHERE id = ?', [$id]);
        // Get the results
        // var_dump($movie);
        // Transfer it to the view
        return view('edit-movie', ['movie' => $movie[0]]);
    }

    public function show()
    {
        $movie = DB::select('SELECT * FROM movies');
        return view('movies', ['movies' => $movie]);

    }


    public function update(Request $request, $id)
    {

       $rez = DB::update('UPDATE movies SET title = ? WHERE id = ?', [$request->title, $id]);
        if ($rez) 
            return 'Successfully updated.';
        else 
            return 'Something went wrong';
    }
}
