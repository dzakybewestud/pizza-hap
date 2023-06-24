@extends('layouts.main')

@include('parts.navbar')
@section('content')
    <div class="container h-100">
        @if (session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                        {{ session()->get('status') }}
                    </div>
                @endif
        <div class="row d-flex justify-content-center h-100 mt-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Menu</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $totalHarga = 0; ?>
                            @foreach ($cart as $cart)
                            <tr>
                                <td>{{ $cart->nama_menu }}</td>
                                <td>{{ $cart->kuantitas }}</td>
                                <td>Rp {{ $cart->harga }}</td>
                                <td colspan="2">
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin menghapus menu dari cart?')" href="{{ url('delete_cart', $cart->id) }}">Delete</a>
                                </td>
                            </tr>
                            <?php $totalHarga = $totalHarga + $cart->harga ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card shadow-2-strong mb-5 mb-lg-5 mb-1" style="border-radius: 16px; ">
                    <div class="card-body pt-4 pb-0 mb-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                <div class="col-12 col-lg-12">
                                    <div class="p-2 m-2">
                                        <h5 class="d-flex align-items-center mb-0">Nama Penerima
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5.5">
                                    <div class="p-2 m-2">
                                        <h5 class="d-flex align-items-center mb-0">Alamat Penerima
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-12">
                                    <div class="p-2 m-2">
                                        <h5 class="d-flex align-items-center mb-0">No Telf Penerima
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-5">

                                    <div class="col-12 col-lg-12">
                                        <div class="rounded border w-100 p-2 m-2">
                                            <p class="d-flex align-items-center mb-0">{{ $cart->nama_user }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5.5">
                                        <div class="rounded border w-100 p-2 m-2">
                                            <p class="d-flex align-items-center mb-0">{{ $cart->address }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-12">
                                        <div class="rounded border w-100 p-2 m-2">
                                            <p class="d-flex align-items-center mb-0">{{ $cart->phone }}
                                            </p>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-2">Subtotal</p>
                                    <p class="mb-2">Rp {{ $totalHarga }}</p>
                                </div>
                                <hr class="my-3">


                                <button type="button" class="btn btn-danger btn-block btn-lg"
                                    style="text-align: right;">
                                    <div class="d-flex justify-content-end" style="font: 500">
                                        <span>Checkout</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
