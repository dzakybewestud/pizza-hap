@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Order</h1>

        {{-- start add menu --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Order Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Waktu Pemesanan</th>
                            <th>Nama User</th>
                            <th>Nama Menu</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->nama_user }}</td>
                            <td>{{ $order->nama_menu }}</td>
                            <td>{{ $order->kuantitas }}</td>
                            <td>{{ $order->harga }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        {{-- end of add menu --}}
    @endsection
