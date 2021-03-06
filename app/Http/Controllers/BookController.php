<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
    * GET /books
    */
    public function index() {
        return 'Here are all the books...';
    }
    public function show($title) {
        return view('books.show')->with(['title' => $title]);
    }

    /**
	* GET
    * /search
	*/
    public function search() {
        return view('books.search');
    }
}
