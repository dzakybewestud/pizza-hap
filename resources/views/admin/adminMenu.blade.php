@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Menu</h1>

        {{-- start add menu --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Add Menu
            </div>
            <div class="card-body">
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                        {{ session()->get('status') }}
                    </div>
                @endif
                <form action="{{ url('/add_menu') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group m-2">
                        <label for="nama_menu">Nama Menu</label>
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Nama Menu"
                            required>
                    </div>
                    <div class="form-group m-2">
                        <label for="harga_menu">Harga Menu</label>
                        <input type="number" min="1" step="any" class="form-control" id="harga_menu"
                            name="harga_menu" placeholder="Harga Menu" required>
                    </div>
                    <div class="form-group m-2">
                        <label for="gambar_menu">Gambar Menu</label>
                        <input type="file" class="form-control" id="gambar_menu" name="gambar_menu"
                            placeholder="Gambar Menu">
                    </div>
                    <button type="submit" class="btn btn-primary ms-2 mt-1">Submit</button>
                </form>
            </div>
            <hr>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Menu</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Gambar Menu</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->nama_menu }}</td>
                                <td>{{ $menu->harga_menu }}</td>
                                <td><a href="/menu/{{ $menu->gambar_menu }}">Lihat gambar</a></td>
                                <td colspan="2">
                                    <a class="btn btn-primary" href="{{ url('edit_menu', $menu->id) }}">Edit</a>
                                    <a onclick="return confirm('Are you sure to delete {{ $menu->nama_menu }}')"
                                        class="btn btn-danger" href="{{ url('delete_menu', $menu->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end of add menu --}}
@endsection
