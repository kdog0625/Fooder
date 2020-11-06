<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tweet extends Model
{
    //不正なリクエストによってtweetsテーブルが予期せぬ内容に更新されることを防ぐ
    protected $fillable = [
        'title',
        'content',
    ];
    //もしuserメソッドがBelongsToクラスではなく、整数や文字列などの別の型を返そうとした場合、その時点でTypeErrorという例外が発生して処理が終了
    public function user(): BelongsTo
    {
         //$thisはTweetクラスのインスタンス自身を示す
        return $this->belongsTo('App\User');
    }
}
