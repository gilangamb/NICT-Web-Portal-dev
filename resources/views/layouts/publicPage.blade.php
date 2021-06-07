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
                    <a class="nav-item nav-link" href="/">Beranda</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/profil/fungsi">Fungsi</a>
                            <a class="dropdown-item" href="/profil/visi-misi">Visi & Misi</a>
                            <a class="dropdown-item" href="/profil/sejarah">Sejarah</a>
                            <!-- Ini garis pemisah didalam dropdown -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Pengelola</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link" href="#">Fasilitas</a>
                    <a class="nav-item nav-link" href="/berita">Berita</a>
                    <a class="nav-item nav-link" href="/agenda">Agenda</a>
                    <a class="nav-item btn btn-primary ml-4 tombol-sign" href="{{ route('register') }}">Sign In</a>
                    <a class="nav-item btn" href="{{ route('login') }}">Log In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    @yield('allContent')

    <footer style="height: fit-content" class="bg-dark text-white">
        <div class="container py-4">
            <div class="row">
              <div class="col-sm-4">
                <img src="{{ asset('fixed-images/logo-nict.png') }}"
                  alt="Image not found"
                  style="width: 100px;"
                  class="mb-3">
                <p>&copy;Copyright 2021 | NICT UIN Syarif Hidayatullah Jakarta.</p>
              </div>

              <div class="col-sm-4">
                <h4 class="mb-4">Address</h4>
                <a href="https://www.google.com/maps/place/Pusat+TIK+Nasional+UIN+Syarif+Hidayatullah+Jakarta/@-6.3082311,106.7550331,17z/data=!4m12!1m6!3m5!1s0x2e69efda2b18eeb1:0xe3bea9346241f122!2sUniversitas+Islam+Negeri+Syarif+Hidayatullah+Jakarta!8m2!3d-6.3065249!4d106.7544967!3m4!1s0x0:0x269f9d2846e7c539!8m2!3d-6.3088429!4d106.7584614?hl=id">
                  Jl. Kertamukti, Kecamatan Ciputat Timur, Kota Tangerang Selatan, Banten 15419</a>
              </div>

              <div class="col-sm-4">
                <h4>Contact</h4>
                <div class="container">
                  <div class="row">
                    <p>
                      <span style='font-size:30px;'>&#9990;</span> 021-7401925
                      <br>
                      <span style='font-size:30px;'>&#9990;</span> 0838-9314-3617 [Ridho]
                    </p>
                  </div>
                </div>
              </div>

            </div>
        </div>
    </footer>

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
