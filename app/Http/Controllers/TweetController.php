<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

use App\Http\Requests\TweetRequest;

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

    //storeアクションメソッドは、第一引数が$request。引数$requestはTweetRequestクラスのインスタンスである、ということを宣言
    public function store(TweetRequest $request, Tweet $tweet)
    {
        $tweet->title = $request->title;
        $tweet->content = $request->content;
        $tweet->user_id = $request->user()->id;
        $tweet->save();
        return redirect('/');
    }
}
