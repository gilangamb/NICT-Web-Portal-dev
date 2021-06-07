@extends('layouts.publicPage')

@section('allContent')

<!-- Awal Jumbotron -->
<section class="profil-company-bg">
    <div class="jumbotron warna-linear text-white">
        <div class="container py-5">
            <h1 class="display-3 text-center">Visi & Misi</h1>
        </div>
    </div>
</section>
<!-- Akhir Jumbotron -->

<!-- Awal Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-4">
            <!-- Awal col-8 -->
            <div class="card">
                {{-- <img class="card-img-top" src="" alt="Opss image not found!"> --}}
                <div class="card-body">
                    <h3>VISI</h3>
                    <p>Sebagai pusat kompetensi Teknologi Informasi
                        dan Komunikasi (TIK) dalam mewujudkan
                        sumber daya manusia (SDM) yang unggul
                        dan berkualitas.</p>
                    <h3>MISI</h3>
                    <ul>
                        <li>Meningkatkan kapabilitas SDM melalui pendidikan dan pelatihan  serta sertifikasi dibidang TIK</li>
                        <li>Melakukan  riset dan pengembangan  terpadu dibidang TIK</li>
                        <li>Menyediakan pusat layanan data</li>
                        <li>Memberikan layanan konsultansi  manajemen dan  tatakelola serta TIK</li>
                        <li>Menciptakan ekosistem yang kondusif untuk menumbuhkan technopreneurship dan start up</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Akhir col-8 -->

        <div class="col-md-4 mb-4">
            <!-- Awal col-4 -->
            <div class="card mb-3">
                <div class="card-body bg-light">
                    <h5>Susah belajar Pemrograman?</h5>
                    <p>Dapatkan panduan dan tips eksklusif dari Ngodingpintar untuk membantumu belajar pemrograman</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="*Nama">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="*Email">
                        </div>
                        <button class="btn btn-info">Ya, Saya Mau!</button>
                    </form>
                </div>
            </div>

            <!-- Awal tutorial terbaru -->
            <h5>Agenda Terbaru</h5>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">#1 - Tutorial Bootstrap 4</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius
                        blandit.</p>
                    <small>Muhammad Hafid</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">#1 - Tutorial Bootstrap 4</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius
                        blandit.</p>
                    <small>Muhammad Hafid</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">#1 - Tutorial Bootstrap 4</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius
                        blandit.</p>
                    <small>Muhammad Hafid</small>
                </a>
            </div>
            <!-- Akhir Tutorial terbaru -->

        </div><!-- Akhir col-4 -->

    </div>
</div>
<!-- Akhir Content -->

@endsection
