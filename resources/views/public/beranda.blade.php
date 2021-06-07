@extends("layouts.publicPage")

@section('allContent')

<!-- Mulai Images Slider -->
<div class="jumbotron jumbotron-fluid img-slider">
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
                <p class="card-text">Pengembangan TIK berbasis profit dan non profit, riset unggulan bidang TIK, karya
                    cipta,
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
                <p class="card-text">Penyediaan infrastuktur bidang teknologi informasi dan komunikasi bagi korporasi
                    dan
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
                <p class="card-text">Pengembangan wirausaha berbasis digital, inkubasi & wirausaha dan peningkatan
                    wirausaha
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
@endsection