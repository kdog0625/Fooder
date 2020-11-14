<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //認証の可否を判断
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //バリデーションのルールを定義
    public function rules()
    {
        return [
            //
            'title' => 'required|max:50',
            'content' => 'required|max:500',
            'tweet_img' =>'image|file',
        ];
    }

    //バリデーションエラーメッセージに表示される項目名をカスタマイズ
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'content' => '本文',
            'tweet_img' =>'画像',
        ];
    }
}
