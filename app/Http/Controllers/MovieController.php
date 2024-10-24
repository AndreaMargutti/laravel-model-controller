<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //

    public function index () {

        $movie = [];

        return view('movies.index', compact('movie'));
    }
}
