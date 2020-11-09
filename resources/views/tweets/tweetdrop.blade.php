<div class="card mt-5">
      <div class="card-header d-flex align-items-center">
        <div class="card-text lead">
      {{ $tweet->user->name }}
        </div>
      @if( Auth::id() === $tweet->user_id )
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">
                  <i class="fas fa-pen mr-1"></i>投稿の更新
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">
                  <i class="fas fa-pen mr-1"></i>投稿の詳細
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $tweet->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>投稿の削除
                </a>
              </div>
            </div>
          </div>
          <div id="modal-delete-{{ $tweet->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $tweet->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      @else
         <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">     
                <a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">
                  <i class="fas fa-pen mr-1"></i>投稿の詳細
                </a>
              </div>
            </div>
          </div>
      @endif  
      </div>
      <div class="card-body border-bottom">
      {{ $tweet->content}}
      </div>
      <div class="card-body">
      {{ $tweet->address}}
      </div>
      <div class="font-weight-lighter text-right mr-2">
      {{ $tweet->created_at->format('Y/m/d H:i') }}
      </div>
    </div>