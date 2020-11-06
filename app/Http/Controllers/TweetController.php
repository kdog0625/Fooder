<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

class TweetController extends Controller
{
    public function index()
    {
    // 
    $tweets = Tweet::all()->sortByDesc('created_at');

    return view('tweets.index', ['tweets' => $tweets]);
    }

    public function create()
    {
        return view('tweets.create');    
    }
}
