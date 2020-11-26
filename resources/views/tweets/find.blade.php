@extends('app')

@section('title', 'Food一覧')

@section('content')
@include('nav')
<div class="imgwrapper">
  <img src="images/image01.jpg" class="img-responsive" style="width: 100%; background-size:cover">
</div>
<div class="container" style="margin-top:50px;">
  @foreach($tweets as $tweet) 
  @include('tweets.tweetdrop')
  @endforeach
      
</div>
@endsection
