@extends('layouts.main')
@include('parts.navbar')

@section('content')
    <div class="container mt-4">
        @if (session()->has('status'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                {{ session()->get('status') }}
            </div>
        @endif

        <div class="row">
            @foreach ($list_order as $list_order)
                <div class="col-md-6">
                    <div class="card w-100 m-2">
                        <div class="card-body">
                            <h3 class="card-text">Status :
                                @if($list_order->delivery_status == 'processing')
                                <span class="text-danger">{{ $list_order->delivery_status }}</span>
                                @elseif ($list_order->delivery_status == 'diantar')
                                <span class="text-success">{{ $list_order->delivery_status }}</span>
                                @else
                                <span class="text-primary">{{ $list_order->delivery_status }}</span>
                                @endif
                            </h3>
                            <h6 class="card-title">Waktu Pemesanan : {{ $list_order->created_at }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
