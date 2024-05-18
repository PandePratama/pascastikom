<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #6C7ABB;" background-repeat: no-repeat; background-position: center; max-width: 1200px; margin: 0 auto;>
    <a class="navbar-brand" href="#">
    <img src="img/LogoITB.png" width="163" height="45" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="{{ url('/about')}}" role="button" data-toggle="dropdown" aria-expanded="false">
          About
          </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/about#sejarah')}}">Sejarah</a>
              <a class="dropdown-item" href="{{ url('/about#visi-misi')}}">Visi Misi</a>
              <a class="dropdown-item" href="{{ url('/about#struktur')}}">Struktur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="{{ url('/akademik')}}" role="button" data-toggle="dropdown" aria-expanded="false">
          Akademik
          </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#peresmian">Peresmian</a>
              <a class="dropdown-item" href="#konsentrasi">Konsentrasi</a>
              <a class="dropdown-item" href="#biaya">Biaya</a>
              <a class="dropdown-item" href="#persyaratan">Persyaratan</a>
            </div>
          </li>
            <a class="nav-link" href="#">Penghargaan</a>
            <a class="nav-link" href="#">Media</a>
        </div>
    </div>
</nav>
<!-- navbar end -->

<!-- content -->
<div id="peresmian">
  <h4 class="text-center">MAGISTER KOMPUTER (S2) <br>PROGRAM STUDI SISTEM INFORMASI</h4>
  <p class="text-center">Magister Komputer Program Studi (S2) Sistem Informasi Institut Teknologi dan Bisnis STIKOM Bali dengan gelar akademik M.Kom, memiliki <br> bidang keahlian Intelligence dan Secure System guna mendukung sektor ekonomi, pariwisata dan perusahaan</p>
  <p class="text-center">Kurikulum Magister Sistem Informasi disusun dengan memperhatikan profil lulusan yang sesuai dengan <br> karakteristik KKNI level 8 (setara dengan lulusan S2).</p>
  <p class="text-center">Berkarir dan menjadi professional dibidang Sistem Informasi</p>
  <p class="text-center">Memiliki wawasan global dan mampu bersaing ditingkat Internasional</p>
  <p class="text-center">Memiliki kemampuan menganalisis, mengevaluasi, <br> mengintegrasi, dan mengembangkan metode serta pengetahuan sistem infromasi</p>
  <p class="text-center">Mampu mengidentifikasi, memformulasi, meneliti <br> literatur, dan menyelesaikan masalah sistem informasi</p>
</div>

<section id="konsentrasi" class="py-5">
    <div class="container">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="border-radius: 20px;">
            <img src="img/datascience.png" class="card-img-top" alt="Data Science" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <div class="card-body" style="background-color:#6C7ABB; height:370px; border-radius:0 0 20px 20px;">
              <h5 class="card-title text-light">Data Science</h5>
              <p class="card-text text-light" style="font-size: small;">Pada konsentrasi ini berfokus pada analisis terhadap data dengan menerapkan metode-metode kecerdasan artifisial. Selain itu pengembangan terhadap sistem informasi berbasiskan teknologi kecerdasan artifisial untuk mendukung proses bisnis dari skala menengah hingga enterprise terutama pada era society 5.0.</p>
              <a href="#" class="btn btn-light mt-1" style="border-radius: 20px 20px 20px 20px; height:30px;">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="border-radius: 20px;">
            <img src="img/medical informatic.png" class="card-img-top" alt="Medical Informatic" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <div class="card-body" style="background-color:#6C7ABB; height:370px; border-radius:0 0 20px 20px;">
              <h5 class="card-title text-light">Medical Informatic</h5>
              <p class="card-text text-light" style="font-size:small;">Pada konsentrasi ini berfokus pada analisis terhadap data dengan menerapkan metode-metode kecerdasan artifisial. Selain itu pengembangan terhadap sistem informasi berbasiskan teknologi kecerdasan artifisial untuk mendukung proses bisnis dari skala menengah hingga enterprise terutama pada era society 5.0.</p>
              <a href="#" class="btn btn-light mt-1" style="border-radius: 20px 20px 20px 20px; height:30px;" >Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="border-radius: 20px;">
            <img src="img/cyber.png" class="card-img-top" alt="Cyber Security" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <div class="card-body" style="background-color:#6C7ABB; height:370px; border-radius:0 0 20px 20px;">
              <h5 class="card-title text-light">Cyber Security</h5>
              <p class="card-text text-light" style="font-size: small;">Pada konsentrasi ini berfokus pada analisis terhadap data dengan menerapkan metode-metode kecerdasan artifisial. Selain itu pengembangan terhadap sistem informasi berbasiskan teknologi kecerdasan artifisial untuk mendukung proses bisnis dari skala menengah hingga enterprise terutama pada era society 5.0.</p>
              <a href="#" class="btn btn-light mt-1" style="border-radius: 20px 20px 20px 20px; height:30px;">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="border-radius: 20px;">
            <img src="img/enterprice.png" class="card-img-top" alt="Enterprise System" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <div class="card-body" style="background-color: #6C7ABB; height:370px; border-radius:0 0 20px 20px;">
              <h5 class="card-title text-light">Enterprise System</h5>
              <p class="card-text text-light" style="font-size:small;">Pada konsentrasi ini berfokus pada analisis terhadap data dengan menerapkan metode-metode kecerdasan artifisial. Selain itu pengembangan terhadap sistem informasi berbasiskan teknologi kecerdasan artifisial untuk mendukung proses bisnis dari skala menengah hingga enterprise terutama pada era society 5.0.</p>
              <a href="#" class="btn btn-light mt-1" style="border-radius: 20px 20px 20px 20px; height:30px;">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<div id="biaya" class="container">
  <div class="row">
    <div class="col-sm">
      <img src="img/biayakuliah.png" alt="" style="width: 440px; height: 500px;">
    </div>
    <div class="col-sm">
      <h4>Biaya Perkuliahan</h4>
      <p>Biaya pendaftaran Rp.700.000 <br>
        Potongan Biaya Pendaftaran <br>
        Gelombang I : Rp.200.000 <br>
        Gelombang II : Rp.100.000 <br>
        Ditambah Potongan Alumni : Rp.200.000
      </p>
      <p>Biaya dimuka Uang Semester selama 4 semester : Rp.36.000.000</p>
      <p>Potongan Alumni Rp.2.000.000 untuk 4 semester (untuk pembayaran dimuka)</p>
      <p>Potongan Alumni Rp.500.000/semester (untuk pembayaran cicil tiap semester)</p>
      <p>Biaya smt.5 dan selanjutnya jika hanya mengambil tesis adalah Rp.6.000.000</p>
      <p>Biaya sudah termasuk matrikulasi, ujian dan bimbingan (belum termasuk biaya wisuda)</p>
    </div>
  </div>
</div>

  <!-- end content -->

<!-- footer -->
<!-- <div class="card text-center"> -->
  <div class="card-body text-center p-2" style="background-color: #D9D9D9; margin-top: 0px;">
    <h5 class="card-title">Alamat Kampus</h5>
    <div class="d-flex justify-content-center">
        <div class="akkiri mx-3">
            <img src="img/Group 1.png" alt="">
            <p class="text-left">Kampus Terakreditasi B oleh BAN-PT dan<br>siap mendidik mahasiswa dalam bidang<br>Teknologi Indormasi</p>
        </div>
        <div class="akkanan mx-3">
                <p class="text-left">Kampus Renon: <br>Jl. Raya Puputan No. 86 Renon – Denpasar <br>Telp: (0361) 244445</p>
                <p class="text-left">Kampus Jimbaran: <br>Jl. Raya Kampus Udayana Jimbaran Bali <br>Telp : (0361) 8953537</p>
                <p class="text-left">Kampus Abiansemal: <br>Jl. Janger Dauh Yeh Cani Kec. Abiansemal <br>Kabupaten Badung, Bali <br>Telp : 0856-3700-803</p>
        </div>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>

  <!-- footer -->
  <div class="card-footer text-muted" style="background-color: #6C7ABB; display: flex; justify-content: space-between; align-items: center; bottom: 0;">
    <div class="social-media">
        <a href="#"><i class="bi bi-instagram text-white mx-2" style="font-size: 35px;"></i></a>
        <a href="#"><i class="bi bi-facebook text-white mx-2" style="font-size: 35px;"></i></a>
        <a href="#"><i class="bi bi-twitter text-white mx-2" style="font-size: 35px;"></i></a>
    </div>
    <div class="copyright" style="color: white;">
        &copy; All Right Reserved 2024, Pusat Komputer dan Jaringan ITB STIKOM Bali
    </div>
  </div>

<!-- end footer -->


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>