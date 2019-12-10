<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm ">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="/images/logo.png" width="100px" height="100px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('products.index') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('products.index') }}">Carnes</a>
          <a class="dropdown-item" href="{{ route('products.index') }}">Veganos</a>
          <a class="dropdown-item" href="{{ route('products.index') }}">Acompanhamentos</a>
          <a class="dropdown-item" href="{{ route('products.index') }}">Bebidas</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('coupons.index') }}">{{ __('Cupons') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/sobre') }}">{{ __('Sobre') }}</a>
        </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <img src="/images/user.png" style="width:30px;height:30px;">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
       
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    </div>
  </div>
</nav>