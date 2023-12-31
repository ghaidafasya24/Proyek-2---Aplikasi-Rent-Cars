<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <br>
            <hr>
            <h1 class="text-center">Formulir Pengembalian</h1>
            <hr>

            <!-- content  -->
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 10em;">
                <div class="card mb-3 col-ms-4" style="max-width: 1000px;">
                    
                    <br>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_customer" class="form-label">Nama Customer</label>
                            <input type="nama_customer" class="form-control" id="nama_customer" placeholder="Masukkan lokasi pengambilan">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_pengambilan" class="form-label">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-md-6">
                            <label for="lokasi_pengembalian" class="form-label">Lokasi Pengambilan</label>
                            <input type="text" class="form-control" id="lokasi_pengembalian" placeholder="Masukkan lokasi pengambilan">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="inputEmail4" placeholder="dd/mm/yyyy">
                        </div>
                        
                        <h4>Data Diri</h4>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nama</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">No Telp</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan nomor telepon">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Upload KTP</label>
                            <input type="file" class="form-control" id="formFile">
                        </div>   
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <hr>
                        <h4>Data Darurat</h4>
                        
                        <div class="col-md-6">
                            <label for="nama_rekan" class="form-label">Nama Rekan</label>
                            <input type="text" class="form-control" id="nama_rekan" placeholder="Masukkan nama rekan terdekat">
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp_darurat" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp_darurat" placeholder="Masukkan nomor telepon darurat">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email darurat">
                        </div>
                        
                        <hr>
                        <h4>Pembayaran</h4>
                        <h6>Silahkan transfer pada rekening berikut : 294xxxxx</h6>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nama Pemegang Kartu</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan nama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nomor Rekening</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan nomor rekening">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Upload Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="formFile" placeholder="Masukkan nomor rekening">
                            <br>
                            {{-- <div class="w-25 ms-0 mb-2">
                            </div> --}}
                            <a href="" class="btn btn-secondary">Kembali</a>   
                          <a href="" class="btn btn-primary">Booking Now</a>
                          <br><br>
                        </div>
                    </form>
                </div>
                
            </div>
        </main>
    </div>
    <!-- content end  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
