<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/"><strong>Pizza <em style="color: red;">Hap!</em></strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/menus">Our Menu</a></li>
            </ul>

            <ul class="d-flex nav">
            @if (Route::has('login'))
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle text-danger" style="font-size: 30px;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li class="dropdown-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                        </form>
                    </li>
                </ul>
            </li>
            @else
                <li class="nav-item m-1">
                    <a class="btn btn-danger btn-sm" href="{{ route('login') }}">Sign In</a>
                </li>
                <li class="nav-item m-1">
                    <a class="btn btn-danger btn-sm" href="{{ route('register') }}">Register</a>
                </li>
            @endauth
            @endif
            </ul>

            {{-- @if (Auth::check())

                kalo blom login gaakan muncul

            @endif --}}


            {{-- <form class="d-flex mt-1">
                <a class="btn btn-outline-dark me-3" type="submit" href="/cart">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </a>
                <a class="btn btn-danger" href="/login">Sign In</a>
            </form> --}}

        </div>
    </div>
</nav>
