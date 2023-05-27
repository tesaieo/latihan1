<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Movie $movie){
        return view('detailspage',[
            "title" => "Details",
            "movie" => $movie ,
            "episodes" => Episode::where('movie_id',$movie->id)->paginate(3)
        ]);
    }

    public function show(Movie $movie){
        return view('category',[
        "title" => "Category" ,
        "movies" => Movie::all() , 
        "genre" => $movie->genre_id
    ]);
    }

}
