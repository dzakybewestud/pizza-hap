@extends('layouts.main')

@section('content')
    {{-- navbar --}}
    @include('parts.navbar')
    {{-- end of navbar --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/b.jpg') }}" class="d-block w-100" alt="first-crsl" style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>La<span style="color: red; font-style: italic;">Hap</span> Pizza-mu Dengan Order Sekarang!</h5>
                    <a class="btn btn-danger mx-3" href="/menus">Order</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/banPizza2.jpg') }}" class="d-block w-100" alt="second-crsl"
                    style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bingung Caranya Pesan? Klik Tutorial Di Bawah!</h5>
                    <a class="btn btn-danger mx-3" href="#cara-pesan">Tutorial</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/banPizza1.jpg') }}" class="d-block w-100" alt="third-crsl"
                    style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tertarik Bergabung? Hubungi Kami!</h5>
                    <a class="btn btn-danger mx-3" href="#about-us">About Us</a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- CAROUSEL END --}}


        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center pb-0" id="cara-pesan">
            <div class="container ">
                <h2 class="mb-5">Cara Pesan!</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div id="tentukan-pesananmu">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-cart-fill m-auto"
                                        style="color:#dc3545;"></i></div>
                                <h3>Tentukan Pesananmu!</h3>
                                <p class="lead mb-0">Pilih Pizza -> <br>Klik Tombol "Add to Cart"</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-cash m-auto" style="color:#dc3545"></i>
                            </div>
                            <h3>Lakukan Pembayaran!</h3>
                            <p class="lead mb-0">Pilih Metode Pembayaran -> <br>Isi Data Diri -> <br>Klik Tombol "Checkout"
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto"
                                    style="color: #dc3545"></i></div>
                            <h3>Pizza-mu Siap Diantar!</h3>
                            <p class="lead mb-0">Driver akan segera <br> mengantarkan pesananmu!</p>

                        </div>
                    </div>
                </div>
        </section>
        <!-- Image Showcases-->
    <!-- About Us-->
    <section class="testimonials text-center p-0 bg-light">
        <div class="container">
            <section id="about-us" class="testimonials text-center bg-light">
                <h2 class="mb-5">About Us!</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg"
                                alt="..." />
                            <h5>Dzaky Ahmadin</h5>
                            <h5>Berkah Wardhana</h5>
                            <p class="font-weight-light mb-0">"teks1"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg"
                                alt="..." />
                            <h5>Prima Daffa</h5>
                            <h5>Al Kautsar</h5>
                            <p class="font-weight-light mb-0">"teks2"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg"
                                alt="..." />
                            <h5>Depiero Muhammad</h5>
                            <h5>Al Ghifari</h5>
                            <p class="font-weight-light mb-0">"teks3"</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script>
        document.querySelector('.btn[href="#cara-pesan"]').addEventListener('click', function(event) {
            event.preventDefault();
            const target = document.querySelector('#cara-pesan');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        });

        document.querySelector('.btn[href="#about-us"]').addEventListener('click', function(event) {
            event.preventDefault();
            const target = document.querySelector('#about-us');
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
