<nav class="navbar bg-light shadow-none navbar-dark navbar-expand-sm fixed-top">
  <a class="navbar-brand ml-5" href="/">Foodly</a>
  <form class="form-inline  justify-content-center">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
  </form>
  <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-right mr-2">
      @guest
      <li class="nav-item ml-2">
        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
      </li>
      @endguest

      @guest 
      <li class="nav-item ml-2">
        <a class="nav-link" href="{{ route('register') }}">新規登録</a>
      </li>
      @endguest


      @auth
      <li class="nav-item">
      <a class="nav-link" href="{{ route('tweets.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
      </li>
      @endauth
      
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <button class="dropdown-item" type="button"
                  onclick="location.href=''">
            マイページ
          </button>
          <div class="dropdown-divider"></div>
          <button form="logout-button" class="dropdown-item" type="submit">
            ログアウト
          </button>
        </div>
      </li>
      <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
      </form>
      @endauth
    </ul>
  </div>
</nav>