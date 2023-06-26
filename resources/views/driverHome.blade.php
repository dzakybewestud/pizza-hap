@extends('layouts.main')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('/home') }}"><strong>Pizza <em style="color: red;">Hap!</em></strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Hey, {{ Auth::user()->name }}</a></li>
            </ul>

            <ul class="d-flex nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown my-2">
                            <a class="btn btn-outline-dark py-2 dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

@section('content')
    <div class="container mt-4">
        @if (session()->has('status'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                {{ session()->get('status') }}
            </div>
        @endif

        <div class="row">
            @foreach ($order as $order)
                <div class="col-md-6">
                    <div class="card w-100 m-2">
                        <div class="card-body">
                            <h3 class="card-text">Status :
                                @if($order->delivery_status == 'processing')
                                <span class="text-danger">{{ $order->delivery_status }}</span>
                                @elseif ($order->delivery_status == 'diantar')
                                <span class="text-success">{{ $order->delivery_status }}</span>
                                @else
                                <span class="text-primary">{{ $order->delivery_status }}</span>
                                @endif
                            </h3>
                            <h6 class="card-title">Waktu Pemesanan : {{ $order->created_at }}</h6>
                            <h6 class="card-title">Nama Pelanggan : {{ $order->nama_user }}</h6>
                            <h6 class="card-title">No. telf Pelanggan : {{ $order->phone }}</h6>
                            <h6 class="card-title">Alamat Pelanggan : {{ $order->address }}</h6>
                            <div class="d-flex justify-content-end">

                                @if ($order->delivery_status == 'processing')
                                <a href="{{ url('status', $order->nama_user) }}" class="btn btn-success me-1">Diantar</a>
                                <a href="{{ url('status', $order->nama_user) }}" class="btn btn-primary">Selesai</a>
                                @elseif($order->delivery_status == 'diantar')
                                <a href="{{ url('status', $order->nama_user) }}" class="btn btn-success me-1 disabled" >Diantar</a>
                                <a href="{{ url('status', $order->nama_user) }}" class="btn btn-primary">Selesai</a>
                                @else
                                <h6 class="text-danger">Pesanan telah selesai</h6>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
