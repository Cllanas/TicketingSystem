<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">
</ul>
<!-- Right Side Of Navbar -->
<ul class="navbar-nav  ml-auto " >
    <form class="form-inline">
        <input class="form-control mr-md-4" type="search" placeholder="Search" aria-label="Search">
        <button class="btn search mr-2 my-md-0" type="submit">Search</button>
    </form>
    <!-- Authentication Links -->
    @guest
    <li class="nav-item font ">
        <a class="nav-link font" href="/contact"> Contact </a>
    </li>
    <li class="nav-item font ">
        <a class="nav-link font" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item font">
        <a class="nav-link font" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown font">
        <a id="navbarDropdown font" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right font" aria-labelledby="navbarDropdown">
            <a class="dropdown-item font" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </div>
    </li>
    @endguest  
</ul>