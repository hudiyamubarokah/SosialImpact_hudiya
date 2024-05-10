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
            <a class="nav-link active" aria-current="page" href="#aboutme">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#MYED">Manfaat</a>
          </li>
        </ul>
        <button type="button" class="btn btn-sm rounded-pill btn-login" style="width:100px; height:40px;" > <a class="nav-link" href="{{ route('transaksi_create') }}">Donasi now </a> </button>
      </div>
    </div>
    </div>
  </div>
</nav>

<div class=" px-5 py-3">

  <div class="row g-0 py-5">
    <div class="col-md-6">
       
      <img src="{{ asset('img/help/1.png') }}" width="600px" height="400px" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body my-5 mx-5">
        <h1 class="card-title">SosialImpact</h1>
        <p class="card-text"><h3>Mereka Berkumpul di Satu #SosialImpact</h3> 
            Galang dana dan donasi online kini semakin mudah dilakukan dimanapun dan kapanpun</p>
            <a href="{{ route('transaksi_create') }}" class="btn btn-primary"><button class="btn btn-primary">Donasi Sekarang</button></a>
      </div>
      
    </div>
</div>

</div>

<div id="aboutme" class="pb-5" style="background-color: #D6F0EE;">
<h1 class="pt-5 pb-3 text-center">About</h1>
<div class="container overflow-hidden text-center" style="background-color: #D6F0EE;">
  <div class="row gx-5" >
    <div class="col" style="background-color: #D6F0EE;">
     <p class="card-text mx-5 ">
        SosialImpact adalah platform inovatif yang dirancang untuk mempertemukan individu-individu yang ingin berdonasi 
        dengan mereka yang sedang menggalang dana. Kami percaya bahwa setiap orang memiliki potensi untuk membuat 
        perubahan positif di dunia, dan SosialImpact adalah jembatan yang memungkinkan hal itu terjadi. 
        Dengan antarmuka yang ramah pengguna, SosialImpact hadir di berbagai platform, termasuk situs web, aplikasi iPhone, dan 
        aplikasi Android, memastikan bahwa pengguna dapat mengakses layanan kami dari mana saja dan kapan saja.
        </p>
    </div>
    <div class="col" style="background-color: #D6F0EE;">
  
      <p class="card-text">
        Donasi melalui SosialImpact sangat mudah dan fleksibel, dengan berbagai metode pembayaran seperti 
        transfer bank, eWallet, kartu kredit, dan lainnya. Kami memahami bahwa donor mungkin memiliki 
        preferensi mereka sendiri, sehingga kami memberikan banyak pilihan untuk memastikan pengalaman 
        donasi yang nyaman dan aman. Selain itu, proses penggalangan dana di SosialImpact dirancang sesederhana 
        mungkin. Dalam dua langkah mudah, pengguna dapat membuat kampanye mereka sendiri dan mulai menerima 
        dukungan dari komunitas yang luas.</p>
    
    </div>
  </div>
</div>
</div>

<div class="container p-5">
<h1 class="pt-5 pb-3 text-center">Campaign</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($campaigns as $campaign)
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/causes/4.png') }}" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">{{ $campaign->nama_kampanye }}</h4>
        <h5 class="card-title">Target donasi : {{ number_format($campaign->target_donasi, 2) }}</h5>
        <p class="card-text">{{ $campaign->deskripsi }}</p>
        <p class="card-text"><small class="text-muted">{{ $campaign->tanggal_mulai }}</small></p>
      </div>
    </div>
  </div>
  @endforeach
  <!-- <div class="col">
    <div class="card h-100">
    <img src="{{ asset('img/causes/3.png') }}" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ asset('img/causes/2.png') }}" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ asset('img/causes/1.png') }}" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div> -->
</div>
</div>

<div id="MYED" class="pb-5" style="background-color: #D6F0EE;">
<h1 class="pt-5 pb-3 text-center">Manfaat</h1>
<div class="container overflow-hidden text-center" style="background-color: #D6F0EE;">
  <div class="row gx-5" >
    <div class="col" style="background-color: #D6F0EE;">
     <img src="{{ asset('img/causes/1.png') }}" width="500px" height="400px" alt="">
    </div>
    <div class="col" style="background-color: #D6F0EE;">
  
      <p class="card-text">
      Website donasi yang berfokus pada dampak sosial memberikan cara yang efisien
       dan efektif bagi individu dan organisasi untuk mendukung tujuan kemanusiaan dan 
       inisiatif positif lainnya. Dengan adanya website donasi, proses penggalangan dana 
       menjadi lebih transparan dan mudah diakses oleh siapa saja di seluruh dunia. 
       Manfaat utama dari website donasi untuk dampak sosial adalah kemampuannya untuk 
       menghubungkan donor dengan berbagai proyek dan kampanye yang bertujuan memberikan 
       perubahan positif di masyarakat. Selain itu, website ini juga memberikan platform untuk
        menyampaikan kisah-kisah inspiratif, menjelaskan dampak yang diharapkan, dan menyediakan 
        cara aman untuk menyumbang. Dengan donasi online, donor dapat melihat bagaimana kontribusi 
        mereka digunakan dan dampak nyata yang dihasilkan, meningkatkan keterlibatan dan kepercayaan. 
        Secara keseluruhan, website donasi untuk dampak sosial memungkinkan terjadinya kolaborasi yang lebih 
        luas dan membantu mempercepat perubahan positif di berbagai bidang, mulai dari kesehatan, pendidikan, 
        hingga lingkungan.

</p>
    
    </div>
  </div>
</div>
</div>

<footer class="sticky-footer " style="background-color: #D6F0EE;">
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