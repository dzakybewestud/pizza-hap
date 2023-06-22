@extends('layouts\main')

@section('content')
    {{-- Login Form --}}
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="py-4 px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 margin-top: 10px; mt-xl-4" style="color: #907a70;"></i>
                        <span class="h1 fw-bold mb-0">Pizza </span>
                        <span class="text-danger h1 fw-bold mb-0"><em>Hap!</em></span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5" action="">
                        <form action="" method="POST" width: 23rem;">
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="form-control form-control-lg"
                                    placeholder="Email Address" />
                                <label class="form-label sr-only" for="form2Example18"></label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example18" class="form-control form-control-lg"
                                    placeholder="Password" />
                                <label class="form-label sr-only" for="form2Example18"></label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button type="button" class="btn btn-danger">Login</button>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                            <p>Don't have an account? <a href="/register" class="link-danger">Register here</a></p>
                            <a class="btn btn-sm btn-outline-dark" href="/">back to home</a>
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('assets/img/pizza-bg.jpg') }}" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
@endsection
