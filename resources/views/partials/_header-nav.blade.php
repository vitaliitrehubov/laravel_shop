<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('products.index') }}">Laravel Shop</a>
        <div class="" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                      <a href="#" class="nav-link">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="nav-item">
                      <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-dark" type="submit">Logout</button>
                      </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
