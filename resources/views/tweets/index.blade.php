@extends('app')

@section('title', 'Food一覧')

@section('content')
<div class="container">
@foreach($tweets as $tweet) 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $tweet->user->name }} 
            </div> 
            <div class="font-weight-lighter">
              {{ $tweet->created_at->format('Y/m/d H:i') }}
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $tweet->title }} 
          </h3>
          <div class="card-text">
            {!! nl2br(e( $tweet->content )) !!} 
          </div>
        </div>
      </div>
    @endforeach
</div>



@endsection


<div class="container" style="margin-top:50px;">