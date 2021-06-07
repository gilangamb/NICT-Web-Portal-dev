<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>DEV NICT UIN Syarif Hidayatullah Jakarta</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('fixed-images/logo-nict.png') }}" alt="" style="width: 112px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#">Beranda</a>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Fungsi</a>
              <a class="dropdown-item" href="#">Visi & Misi</a>
              <a class="dropdown-item" href="#">Sejarah</a>
              <!-- Ini garis pemisah didalam dropdown -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Pengelola</a>
            </div>
          </div>
          <a class="nav-item nav-link" href="#">Fasilitas</a>
          <a class="nav-item nav-link" href="#">Berita</a>
          <a class="nav-item nav-link" href="#">Agenda</a>
          <a class="nav-item btn btn-primary ml-4 tombol-sign" href="{{ route('register') }}">Sign In</a>
          <a class="nav-item btn" href="{{ route('login') }}">Log In</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Mulai Images Slider -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    </div>
  </div>

  <!-- Mulai Daftar Layanan -->
  <div class="container my-5" style="height: auto;">
    <div class="row">
      <div class="col-sm-12 layanan mb-5">
        <h2 class="text-center judul">Layanan</h2>
        <hr>
        <h5 class="text-center">NICT dapat memenuhi semua kebutuhan anda dengan menyediakan layanan-layanan secara
          profesional dan terpercaya.</h5>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-3 text-center card mb-5 listLayanan listLayanan">
        <div class="row justify-content-center mt-5" style="width:auto;">
          <img src="fixed-images/konsul.png" alt="" style="width: 100px;">
          <img src="fixed-images/konsul-hover.png" alt="" class="img-top" style="width: 100px;">
        </div>
        <div class="card-body text-center mb-4">
          <h5 class="card-title">Konsultasi Manajemen & TIK</h5>
          <p class="card-text">Jasa konsultan manajemen dan layanan TIK bagi lembaga pemerintahan,
            pendidikan dan umum.
          </p>
        </div>
      </div>
      <div class="col-sm-3 text-center card mb-5 listLayanan offset-md-1">
        <div class="row justify-content-center mt-5" style="width:auto;">
          <img src="{{ asset('fixed-images/exam.png') }}" alt="" style="width: 100px;">
          <img src="{{ asset('fixed-images/exam-hover.png') }}" alt="" class="img-top" style="width: 100px;">
        </div>
        <div class="card-body text-center mb-4">
          <h5 class="card-title">Pelatihan & Sertifikasi</h5>
          <p class="card-text">Program pelatihan & sertikasi bidang TIK bagi pelajar, professional dan umum.
          </p>
        </div>
      </div>
      <div class="col-sm-3 text-center card mb-5 listLayanan offset-md-1">
        <div class="row justify-content-center mt-5" style="width:auto;">
          <img src="{{ asset('fixed-images/rnd.png') }}" alt="" style="width: 100px;">
          <img src="{{ asset('fixed-images/rnd-hover.png') }}" alt="" class="img-top" style="width: 100px;">
        </div>
        <div class="card-body text-center mb-4">
          <h5 class="card-title">Pengembangan TIK</h5>
          <p class="card-text">Pengembangan TIK berbasis profit dan non profit, riset unggulan bidang TIK, karya cipta,
            inovasi.</p>
        </div>
      </div>
      <div class="col-sm-3 text-center card mb-5 listLayanan">
        <div class="row justify-content-center mt-5" style="width:auto;">
          <img src="{{ asset('fixed-images/cloud.png') }}" alt="" style="width: 100px;">
          <img src="{{ asset('fixed-images/cloud-hover.png') }}" alt="" class="img-top" style="width: 100px;">
        </div>
        <div class="card-body text-center mb-4">
          <h5 class="card-title">Cloud Computing</h5>
          <p class="card-text">Penyediaan infrastuktur bidang teknologi informasi dan komunikasi bagi korporasi dan
            masyarakat.</p>
        </div>
      </div>
      <div class="col-sm-3 text-center card mb-5 listLayanan offset-md-1">
        <div class="row justify-content-center mt-5" style="width:auto;">
          <img src="{{ asset('fixed-images/techno.png') }}" alt="" style="width: 100px;">
          <img src="{{ asset('fixed-images/techno-hover.png') }}" alt="" class="img-top" style="width: 100px;">
        </div>
        <div class="card-body text-center mb-4">
          <h5 class="card-title">Technopreneurship</h5>
          <p class="card-text">Pengembangan wirausaha berbasis digital, inkubasi & wirausaha dan peningkatan wirausaha
            berbasis digital.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="pb-4" style="height: auto; background-color: #EFFFFF;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 layanan my-5">
          <h2 class="text-center judul">Fasilitas</h2>
          <hr>
          <h5 class="text-center">NICT UIN Syarif Hidayatullah Jakarta mendukung
            berbagai program & kegiatan pengembangan bidang teknologi informasi dan komunikasi</h5>
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="card-deck mb-5">
          <div class="card text-center listFasilitas">
            <img src="{{ asset('fixed-images/auditorium.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Auditorium</h4>
            </div>
          </div>
          <div class="card text-center listFasilitas">
            <img src="{{ asset('fixed-images/studio.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Studio</h4>
            </div>
          </div>
          <div class="card text-center listFasilitas">
            <img src="{{ asset('fixed-images/lab.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Laboratorium</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>