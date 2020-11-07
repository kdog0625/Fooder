@extends('app')

@section('title', 'Food一覧')

@section('content')
@include('nav')

<div class="container" style="margin-top:150px;">
    @include('tweets.tweetshow')
  </div>
@endsection