<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index (){
        $listMovies = Movie::all();
        return view('guest.movie.index',compact('listMovies'));
    }
}
