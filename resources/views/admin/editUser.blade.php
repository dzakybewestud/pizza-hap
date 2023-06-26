@extends('admin.layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">User Data</h1>

    {{-- start edit menu --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit and Update User
        </div>
        <div class="card-body">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                    {{ session()->get('status') }}
                </div>
            @endif
            <form action="{{ url('/edit_user_confirm', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group m-2">
                    <label for="name">Nama User</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group m-2">
                    <label for="email">Email User</label>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group m-2">
                    <label for="phone">No Telf User</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="phone" value="{{ $user->phone }}" required>
                </div>
                <div class="form-group m-2">
                    <label for="address">Alamat User</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="address" value="{{ $user->address }}" required>
                </div>

                <input type="submit" class="btn btn-primary ms-2 mt-1" value="update"/>
            </form>
        </div>
    </div>
</div>

@endsection
