@extends('app')

@section('title', 'ユーザー登録')

@section('content')
@include('nav')
<div class="container" style="margin-top:86px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header reg-hed text-center">{{ __('新規登録') }}</div>

        @include('error_card_list')

          <div class="card-text">
            <form method="POST" action="{{ route('register') }}">
              @csrf
                <div class="md-form">
                  <label for="name">ユーザー名</label>
                  <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                </div>
                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
                </div>
                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>
                <div class="md-form">
                  <label for="password_confirmation">パスワード(確認)</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
            </form>
                <div class="mt-0">
                  <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
                </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>

@endsection