@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')
<div class="container" style="margin-top:150px;">
  <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('tweets.update', ['tweet' => $tweet]) }}">
                @method('PATCH')
                @include('tweets.form')
                <button type="submit" class="btn blue-gradient btn-block">更新する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection