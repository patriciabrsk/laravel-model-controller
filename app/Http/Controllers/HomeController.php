<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $movies = Movie::all();

        $data = [
            'movie' => new Movie(),
            'movies' => $movies
        ];

        return view('movies.index', $data);
    }
}
