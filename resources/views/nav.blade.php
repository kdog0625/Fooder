<nav class="navbar bg-light shadow-none navbar-dark navbar-expand-md fixed-top">

<a class="navbar-brand ml-5" href="/">Foodly</a>

  <ul class="navbar-nav ml-auto">
    <form class="form-inline my-2 my-lg-0 justify-content-center">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @guest
    <li class="nav-item">
      <a class="nav-link mr-2" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @guest 
    <li class="nav-item">
      <a class="nav-link mr-5" href="{{ route('register') }}">新規登録</a>
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
</nav>