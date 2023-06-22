@extends('layouts.main')

@section('content')
<section class="h-100 h-custom">
    <div class="container h-100 py-5">
      <a href="#" onclick="history.back()" class="btn btn-danger mx-1 mb-4">Back</a>
      {{-- Button Back --}}
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="h5">Cart</th>
                  <th scope="col">Size</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/pizza1.jpg') }}" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                        <div class="flex-column ms-4">
                          <p class="mb-2">Cheese Overload</p>
                          <p class="mb-0"><span style="font-weight: normal;">Keju Mozzarella, String Cheese, Cream Mayo, Keju Parmesan, White Cheese</span></p>
                        </div>
                    </div>
                  </th>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">Regular</p>
                  </td>
                  <td class="align-middle">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-0"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
                      <input id="form1" min="0" name="quantity" value="2" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">IDR 24.000</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="border-bottom-0">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/pizza2.avif') }}" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Meat Lovers</p>
                        <p class="mb-0"><span style="font-weight : normal;"> Sapi, Daging Sapi Cincang, Sosis Sapi, Sosis Ayam, Keju Mozzarella</span></p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">Personal</p>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-0"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">IDR 54.000</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card shadow-2-strong mb-5 mb-lg-5 mb-1" style="border-radius: 16px; ">
            <div class="card-body pt-4 pb-0">
              <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                  <form>
                    <div class="d-flex flex-row pb-3">
                      <div class="d-flex align-items-center pe-2">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                          value="" aria-label="..." checked />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>GOPAY
                        </p>
                      </div>
                    </div>
                    <div class="d-flex flex-row pb-3">
                      <div class="d-flex align-items-center pe-2">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                          value="" aria-label="..." />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>DANA
                        </p>
                      </div>
                    </div>
                    <div class="d-flex flex-row">
                      <div class="d-flex align-items-center pe-2">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                          value="" aria-label="..." />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>QRIS
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-5">
                  <div class="row">
                    <div class="col-12 col-lg-12">
                      <div class="form-outline mb-2 mb-xl-2">
                        <input type="text" id="typeName" class="form-control form-control-lg" size="17"
                          placeholder="Nama Penerima" style="padding-bottom: px;" />
                      </div>
                    </div>
                      <div class="col-12 col-lg-5.5">
                      <div class="form-outline mb-2 mb-xl-2">
                        <input type="text" id="typeExp" class="form-control form-control-lg"
                          placeholder="Nomor Handphone"
                          size="7" id="exp" minlength="7" maxlength="50" />
                      </div>
                    </div>
                    <div class="col-12 col-xl-12">
                      <div class="form-outline mb-7 mb-xl-5">
                        <input type="text" id="typeExp" class="form-control form-control-lg"
                          placeholder="Alamat Penerima"
                          size="7" id="exp" minlength="7" maxlength="50" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                  <div class="d-flex justify-content-between" style="font-weight: 500;">
                    <p class="mb-2">Subtotal</p>
                    <p class="mb-2">IDR 78.000</p>
                  </div>

                  <div class="d-flex justify-content-between" style="font-weight: 500;">
                    <p class="mb-0">Shipping</p>
                    <p class="mb-0">IDR 3.000</p>
                  </div>

                  <hr class="my-3">
                  <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                    <p class="mb-2">Total (tax included)</p>
                    <p class="mb-2">IDR 81.000</p>
                  </div>

                  <button type="button" class="btn btn-danger btn-block btn-lg" style="text-align: right;">
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
  </section>
@endsection
