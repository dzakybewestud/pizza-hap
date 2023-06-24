@extends('layouts.main')

@section('content')
    {{-- navbar --}}
    @include('parts.navbar')
    {{-- end of navbar --}}

    {{-- START OF MENUS --}}
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row gx-4 gx-lg-5 row-cols-md-3 justify-content-center">
                @foreach ($menu as $menu)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="height:400px" src="/menu/{{ $menu->gambar_menu }}"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $menu->nama_menu }}</h5>
                                    <!-- Product price-->
                                    Rp {{ $menu->harga_menu }}
                                </div>

                                <form action="{{ url('add_cart', $menu->id) }}" method="POST">
                                    @csrf
                                    <!-- Input Quantity-->
                                    <div class="input-group mt-3">
                                        <input type="number" min="0" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                                    </div>
                                    <!-- Product actions-->
                                    <div class="text-center mt-3">
                                        <input type="submit" class="btn btn-danger btn-outline mt-auto text-white" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- END OF MENUS --}}
@endsection
