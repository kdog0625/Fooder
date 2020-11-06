@extends('app')

@section('title', 'Food一覧')

@section('content')
@include('nav')
<div class="imgwrapper">
  <img src="images/image01.jpg" class="img-responsive" style="width: 100%; background-size:cover">
</div>
<div class="container" style="margin-top:50px;">
  <div class="card mt-5">
    <div class="card-header">
    タイトル
    </div>
    <div class="card-body">
    ホームページ作成・Web集客を一通り習得したい方向けです
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-header">
    タイトル
    </div>
    <div class="card-body">
    ホームページ作成・Web集客を一通り習得したい方向けです
    </div>
  </div>
</div>
@endsection
