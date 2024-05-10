<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SosialImpact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
  /* Custom CSS for navbar */
  /* Navbar */
  .navbar-custom {
    background-color: #00AAA6;
  }

  /* Brand */
  .navbar-custom .navbar-brand {
    color: #000000;
    font-weight: bold;
  }

  /* Toggler Icon */
  .navbar-custom .navbar-toggler-icon {
    background-color: #00AAA6;
  }

  /* Links */
  .navbar-custom .navbar-nav .nav-link {
    color: #000000;
  }

  /* Active Link */
  .navbar-custom .navbar-nav .nav-link.active {
    font-weight: bold;
  }

  /* Login Button */
  .navbar-custom .btn-login {
    background-color: #F1F1E6;
    color: #000000;
  }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#">SosialImpact</a>
    <div class="d-flex justify-content-end ">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: #00AAA6;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Home</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav pe-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#aboutme">Donasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#MYED">Contact</a>
          </li>
        </ul>
        <button type="button" class="btn btn-sm rounded-pill btn-login" style="width:100px; height:40px;" > <a class="nav-link" href="{{ route('transaksi_create') }}">Donasi now </a></button>
      </div>
    </div>
    </div>
  </div>
</nav>

<div class="container px-5 py-5" >
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card" style="background:#F3EADA;">
                    <div class="card-header">Transaction</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transactions.store') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="mb-3">
                                <label for="campaign_id" class="col-md-4 col-form-label text-md-right">Campaign ID</label>

                                <div class="col-md-6">
                                    <input id="campaign_id" type="number" class="form-control @error('campaign_id') is-invalid @enderror" name="campaign_id" value="{{ old('campaign_id') }}" required autocomplete="campaign_id" autofocus>

                                    @error('campaign_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>
                                <div class="mb-3">
                                <label for="campaign_id" class="col-md-4 col-form-label text-md-right">Donation_id</label>

                                <div class="col-md-6">
                                    <input id="donation_id" type="number" class="form-control @error('donation_id') is-invalid @enderror" name="donation_id" value="{{ old('donation_id') }}" required autocomplete="donation_id" autofocus>

                                    @error('campaign_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" required>
   
                                </div>
                                <div class="mb-3">
                                    <label for="metode_pembayaran" class="form-label">Mata Uang</label>
                                    <input type="text" class="form-control" name="mata_uang" maxlength="3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                    <input type="text" class="form-control" name="metode_pembayaran" required>
                                </div>
                                <div class="mb-3">
                                    <label for="metode_pembayaran" class="form-label">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" name="tanggal_transaksi" required>
                                </div>

                                <!-- <div class="mb-3">
                                    <label for="name" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div> -->
                            </div>

                            <!-- Add more form fields here -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Transaction
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="sticky-footer mt-5">
  <div class="container-fluid text-white">
    <div style="padding-left: 20px; padding-right: 20px;">
      <div class="text-black" style="background-color: #00AAA6; ">
        <br>
        <div class="container">
          <div class="box" style="padding-top: 30px">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                
                <h5 class=" mb-2 " style="font-weight: bold; font-size: 30px;">SosialImpact</h5>
                <p class=" " style="font-size: 24px;"> Mari Berdonasi Untuk<br> Sekarang dan Masa yang Akan Datang</p>
                <br>
            </div>
            <div class="col-md-6 col-lg-2">
              <p class="color-base mb-2" style="font-weight:bold; font-size: 24px;">Help</p>
              <a class=" btn " href="/" style="font-size: 20px; ">Donasi</a>
            <br>
            <a class="btn " href="" style="font-size: 20px;">Contact</a>
          </div>
          <div class="col-md-6 col-lg-2">
            <p class="color-base mb-2" style="font-weight:bold; font-size: 24px;">Platfrom</p>
            <a class=" btn " href="/" style="font-size: 20px; ">Donasi</a>
            <br>
            <a class="btn " href="" style="font-size: 20px;">Contact</a>
        </div>
              <div class="col-md-6 col-lg-3">
                <p class="color-base mb-2" style="font-weight: bold; font-size: 24px;">Contact</p>
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-map-marker "></i>
                    Jl. Prof. Dr. Hamka Air Tawar Padang
    
                </p>
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-phone p-md-1"></i>+62
                    831-7061-0000</p>
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-envelope p-md-1"></i>hudiyamubarokah@gmail.com</p>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-8">
              <div class="d-flex ">
                <p class="color-base p-md-2" style="font-size: 20px;; top:2px"> Follow us : 
                  <a href="" class="btn btn-social p-md-1 "><i style="font-size:20px; color:white" class="fa">&#xf16a;</i></a>
                  <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa">&#xf232;</i></a>
                  <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa fa-instagram"></i></a>
                  <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa">&#xf09a;</i></a>
                  <a class="btn btn-social p-md-1" href=""><i class="material-icons" style="font-size:20px; color:white">call</i></a></p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="d-flex">
              <p class="color-base p-md-2 " style="font-size: 20px; top:2px"> Mobile : <a href="" class="btn btn-social p-md-1 "><i style="font-size:20px; color:white" class="fa fa-android"></i></a></p>
            </div>
            </div>
          </div> -->
          </div>
        </div>
        <div class="px-5"> <hr style="height: 3px; background-color: white;"></div>
         
          <div class="container fluid text-center">
             
            <h5 class="text-center">Copyright &copy; hudiyamubarokah</h5>   
                  <!-- <h5 style="font-size: 24px">Copyright &copy; hudiyamubarokah</h5> -->
                  <br>
          </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>