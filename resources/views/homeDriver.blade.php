<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/"><strong>Pizza <em style="color: red;">Hap!</em></strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-danger" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="true">
                    <i class="bi bi-person"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">ID Pesanan : 001</h5>
                        <p class="card-text">24/96/2023</p>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary bg-danger me-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                                Detail Pesanan
                            </button>
                            <a href="/driverPesanan" class="btn btn-primary bg-danger">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">ID Pesanan : 002</h5>
                        <p class="card-text">24/96/2023</p>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary bg-danger me-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Detail Pesanan
                            </button>
                            <a href="/driverPesanan" class="btn btn-primary bg-danger">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Id Pesanan : 001</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Email Pembeli: emailpembeli@example.com</h6>
                        <h6>Alamat Pembeli: Jalan Pembeli No. 123</h6>
                        <h6>Total Harga: Rp 100.000</h6>
                        <h6>Kode Pembayaran: 123456789</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary bg-danger">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Id Pesanan : 002</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Email Pembeli: emailpembeli2@example.com</h6>
                        <h6>Alamat Pembeli: Jalan Pembeli No. 456</h6>
                        <h6>Total Harga: Rp 200.000</h6>
                        <h6>Kode Pembayaran: 987654321</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary bg-danger">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
