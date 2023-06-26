@extends('layouts.main')
@include('parts.navbar')

@section('content')
    <div class="card">
        <div class="card-body mx-4">
            <div class="container">
                <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
                <div class="row">
                    <ul class="list-unstyled">
                        <li class="text-black">{{ $order->nama_user }}</li>
                        <li class="text-muted mt-1"><span class="text-black">Invoice</span> #12345</li>
                        <li class="text-black mt-1">{{ $order->created_at }}</li>
                    </ul>
                    <hr>
                </div>
                @foreach ($order as $order)
                <div class="row">
                    <div class="col-xl-10">
                        <p>{{ $order->nama_menu }}</p>
                    </div>
                    <div class="col-xl-2">
                        <p class="float-end">{{ $order->harga }}
                        </p>
                    </div>
                    <hr>
                </div>
                @endforeach
                <div class="row text-black">

                    <div class="col-xl-12">
                        <p class="float-end fw-bold">Total: $10.00
                        </p>
                    </div>
                    <hr style="border: 2px solid black;">
                </div>
                <div class="text-center" style="margin-top: 90px;">
                    <a><u class="text-info">View in browser</u></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>

            </div>
        </div>
    </div>
@endsection
