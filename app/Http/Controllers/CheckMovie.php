<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movie;

class CheckMovie extends Controller
{
    public function index(){
        $data_movies = movie::all();
        return view('welcome',compact('data_movies'));
    }
}
