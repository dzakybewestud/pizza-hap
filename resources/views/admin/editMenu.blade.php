@extends('admin.layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Menu Table</h1>

    {{-- start edit menu --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit and Update Menu
        </div>
        <div class="card-body">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                    {{ session()->get('status') }}
                </div>
            @endif
            <form action="{{ url('/edit_menu_confirm', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group m-2">
                    <label for="nama_menu">Nama Menu</label>
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu"
                        placeholder="Nama Menu" value="{{ $menu->nama_menu }}" required>
                </div>
                <div class="form-group m-2">
                    <label for="harga_menu">Harga Menu</label>
                    <input type="number" min="1" step="any" class="form-control" id="harga_menu"
                        name="harga_menu" placeholder="Harga Menu" value="{{ $menu->harga_menu }}" required>
                </div>
                <div class="form-group m-2">
                    <label>Gambar Menu sekarang : </label>
                    <img src="/menu/{{ $menu->gambar_menu }}" class="img-fluid img-thumbnail mb-3" alt="">
                    <br>
                    <label for="gambar_menu">Ubah Gambar Menu</label>
                    <input type="file" class="form-control" id="gambar_menu" name="gambar_menu"
                        placeholder="Gambar Menu" value="">
                </div>
                <input type="submit" class="btn btn-primary ms-2 mt-1" value="update"/>
            </form>
        </div>
    </div>
</div>

@endsection
