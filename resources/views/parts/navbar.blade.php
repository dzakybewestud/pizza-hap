<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/"><strong>Pizza <em style="color: red;">Hap!</em></strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/menus">Our Menu</a></li>
            </ul>

            <ul class="d-flex nav">
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->usertype == '1')
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary btn-light text-dark bg-danger me-4 my-2 py-2"
                                    type="submit" href="{{ url('home') }}">
                                    Back to admin dashboard
                                </a>
                            </li>
                        @elseif (Auth::user()->usertype == '2')
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary btn-light text-dark bg-danger me-4 my-2 py-2"
                                    type="submit" href="{{ url('driver_home') }}">
                                    Back to driver dashboard
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary btn-light me-4 my-2 py-2" type="submit"
                                    href="{{ url('show_orders') }}">
                                    Pesanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-danger me-4 my-2 py-2" type="submit"
                                    href="{{ url('show_cart') }}">
                                    <i class="bi-cart-fill me-1"></i>
                                    Cart
                                </a>
                            </li>
                        @endif
                        <li class="nav-item dropdown my-2">
                            <a class="btn btn-outline-dark py-2 dropdown-toggle" id="navbarDropdown" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li class="dropdown-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
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
        </div>
    </div>
</nav>
