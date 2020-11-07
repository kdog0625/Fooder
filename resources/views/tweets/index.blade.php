@extends('app')

@section('title', 'Food一覧')

@section('content')
@include('nav')
<div class="imgwrapper">
  <img src="images/image01.jpg" class="img-responsive" style="width: 100%; background-size:cover">
</div>
<div class="container" style="margin-top:50px;">
  @foreach($tweets as $tweet) 
    <div class="card mt-5">
      <div class="card-header">
      {{ $tweet->user->name }}
      </div>
      <div class="card-body">
      {{ $tweet->content}}
      </div>
    </div>
  @endforeach
</div>
@endsection
