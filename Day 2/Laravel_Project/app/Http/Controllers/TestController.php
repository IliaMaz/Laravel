<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return 'Inside the test controller!';
    }

    public function show($id, $order) {
        return 'Show the product id: ' . $id . ', ordered by: ' . $order . '!';
    }
    // * Show the form
    public function insert() {
        return view('insert-form');
    }
    // * Display result
    public function store(Request $resquest) {
        return 'Form submitted with the following data: ' . $resquest->product;
    }
}
