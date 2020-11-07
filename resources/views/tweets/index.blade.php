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
      @if( Auth::id() === $tweet->user_id )
          <!-- dropdown -->
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">
                  <i class="fas fa-pen mr-1"></i>記事を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $tweet->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                </a>
              </div>
            </div>
          </div>
      @endif  
      <div class="card-body">
      {{ $tweet->content}}
      </div>
      <div class="font-weight-lighter text-right">
      {{ $tweet->created_at->format('Y/m/d H:i') }}
      </div>
    </div>
  @endforeach
      
</div>
@endsection
