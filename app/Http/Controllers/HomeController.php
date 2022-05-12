<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $data = [
            'movies' => new Movie(),
        ];
        return view('movies.index');
    }
}
