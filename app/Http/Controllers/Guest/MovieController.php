<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}
