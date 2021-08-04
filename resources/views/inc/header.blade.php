<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Laravel</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="/">Главная</a>
  @if(Auth::check() && Auth::user()->isAdmin())
    <a class="p-2 text-dark" href="admin">Админка</a>
    @endif

    @if(Auth::check())
   <a class="p-2 text-dark" href="allstories">Записи</a>
@endif
</nav>
    <nav id="nav2" class="my-2 my-md-0 me-md-3">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                    <a class="p-2 text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                    <a class="p-2 text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="p-2 text-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </nav>
</header>
