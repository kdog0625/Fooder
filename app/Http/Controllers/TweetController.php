<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

use App\Http\Requests\TweetRequest;

use Illuminate\Support\Facades\Storage;

class TweetController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Tweet::class, 'tweet');
    }

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
        if ($file = $request->tweet_img) {
            //getClientOriginalName()で拡張子を含め、アップロードしたファイルのファイル名を取得
            //time() ---> タイムスタンプを取得する。
            $fileName = time() . $file->getClientOriginalName();
            //public_path() ---> publicディレクトリの完全パスを返します。ここでは、publicディレクトリ内にuploadsディレクトリを作成しています。
            $target_path = public_path('uploads/');
            //画像をpublic/uploads/に、$fileNameという名前で挿入しています。
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $tweet->fill($request->all()); 
        $tweet->user_id = $request->user()->id;
        $tweet->tweet_img = $fileName;
        $tweet->save();
        return redirect('/');
    }

    public function edit(Tweet $tweet)
    {
        return view('tweets.edit', ['tweet' => $tweet]); 
    }

    public function update(TweetRequest $request, Tweet $tweet)
    {
        $tweet->fill($request->all())->save();
        return redirect()->route('tweets.index');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return redirect()->route('tweets.index');
    }

    public function show(Tweet $tweet)
    {
        return view('tweets.show', ['tweet' => $tweet]);
    }    
}
