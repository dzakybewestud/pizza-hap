@extends('layouts.main')

@section('content')
    {{-- Register Form --}}
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="py-3 px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 mt-xl-4" style="color: #907a70;"></i>
                        <span class="h1 fw-bold mb-0">Pizza </span> <span
                            class="text-danger h1 fw-bold mb-1"><em>Hap!</em></span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <form style="width: 25rem;">
                            <h3 class="fw-normal mb-3" style="letter-spacing: 1px;">Register</h3>

                            <div class="form-outline mb-2">
                                <input type="text" id="name" class="form-control"
                                    placeholder="Full Name" />
                            </div>

                            <div class="form-outline mb-2">
                                <input type="email" id="email" class="form-control"
                                    placeholder="Email Address" />
                            </div>

                            <div class="form-outline mb-2">
                                <input type="tel" id="phone" class="form-control"
                                    placeholder="Phone Number" />
                            </div>

                            <div class="form-outline mb-2">
                                <input type="password" id="password" class="form-control"
                                    placeholder="Password" />
                            </div>

                            <div class="form-outline mb-2">
                                <input type="password" id="confirm_password" class="form-control"
                                    placeholder="Confirm Password" />
                            </div>

                            <div class="pt-0 mb-3">
                                <button type="submit" class="btn btn-danger">Register</button>
                            </div>

                            <div class="small">
                                <p><a class="text-muted" href="#!">Already have an account?
                                    <a href="/login" class="link-danger">Login</a>
                                </p>
                                <a class="btn btn-sm btn-outline-dark" href="/">back to home</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('assets/img/pizza-bg3.jpg') }}" alt="Registration image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
@endsection
