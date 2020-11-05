<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
    //ダミーデータ追加
    $tweets = [
        (object) [
            'id' => 1,
            'title' => 'タイトル1',
            'content' => '本文1',
            'created_at' => now(),
            'user' => (object) [
                'id' => 1,
                'userid'=>'@manapon',
                'name' => 'ユーザー名1',
            ],
        ],
    ];
    return view('tweets.index', ['tweets' => $tweets]);
    }
}
