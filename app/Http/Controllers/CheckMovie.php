<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movie;

class CheckMovie extends Controller
{
    public function index(){
        $data_movies = movie::all();
        return view('home',compact('data_movies'));
    }
}
