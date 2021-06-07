@extends('layouts.publicPage')

@section('allContent')

<!-- Awal Jumbotron -->
<section class="profil-company-bg">
    <div class="jumbotron warna-linear text-white">
        <div class="container py-5">
            <h1 class="display-3 text-center">Fungsi</h1>
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
                    <p>
                        @php
                        echo nl2br(
                        "NICT UIN Syarif Hidayatullah Jakarta sebagai salah satu organisasi non struktural memiliki peran melaksanaan pelayanan, pengembangan dan peningkatan kerja-kerja bidang teknologi informasi dan komunikasi. Adapun fungsi NICT UIN Syarif Hidayatullah Jakarta adalah:

                        Pelatihan dan sertifikasi;

                        Sebagai bagian dari sarana penunjang pendidikan, NICT UIN Syarif Hidayatullah Jakarta juga menjalankan fungsi kepelatihan (workshop, training) dan sertifikasi keahlian-keahlian tertentu di bidang teknologi informasi dan komunikasi. Proses pelaksanaannya dapat melibatkan praktisi dan akademisi yang bergerak di bidangnya, dengan manyasar pada pelajar, mahasiswa, tenaga teknis teknis lainnya yang memerlukan sertifikasi bidang teknologi informasi dan komunikasi.

                        Pelayanan teknologi informasi dan komunikasi (ICT services);

                        Produk karya-cipta bidang teknologi informasi dan komunikasi benyak mendukung kerja sehari-hari, baik pada bidang pemerintahan, pendidikan, kesehatan, pertahanan dan aspek lainnya. Tren dan kesempatan tersebut menjadi peluang NICT UIN Syarif Hidayatullah Jakarta dalam memberikan pelayanan teknologi informasi. Pelayanan tersebut dapat ditunjang dengan berbagai fasilitas yang dimiliki, seperti laboratorium, sarana riset dan pengembangan (research and development), multimedia dan data center.

                        Pengembangan teknologi informasi dan komunikasi (ICT development).

                        Fasilitas lengkap dan memadai yang dimiliki oleh NICT UIN Syarif Hidayatullah Jakarta dinilai sangat bermanfaat bagi pengembangan dan peningkatan kajian dan penerapan teknologi informasi dan komunikasi. Pemanfaatan tersebut dapat dilaksanakan secara non profit, maupun berbasis profit (komersil) melalui mekanisme penyewaan atau penggunaan berbayar dengan peraturan/ ketentuan tertentu yang mengatur tertib penggunaan dan pemanfaatan fasilitas yang dimiliki untuk pengembangan dimaksud. Pengembangan tersebut dapat berupa kerja-kerja penelitian, karya-cipta, dan inovasi yang berhak paten (hak kekayaan intelektual), yang selain memberikan dampak profit, juga memberikan dampak perubahan kemudahan dan peningkatan peran teknologi informasi dalam mendukung kemudahan dan efektivitas berbagai aspek.

                        Pelayanan data center atau cloud computer.

                        Dewasa ini, penyimpanan data atau jamak disebut cloud (awan) menjadi kebutuhan banyak kalangan. Kebutuhan penyimpanan data berbasis virtual semakin tinggi penggunaannya mengingat pentingnya penyimpanan data secara online, yang dapat diakses dari mana pun dan kapan pun. Pelayanan data center dapat diperankan oleh NICT UIN Syarif Hidayatullah Jakarta, baik bagi sivitas akademika UIN Syarif Hidayatullah Jakarta maupun masyaraat luas.

                        Technopreneurship.

                        Technopreneurship merupakan sebuah pengembangan dan penggabungan antara konsep kewirausahaan (entrepreneurship) dan teknologi. Dalam mencapai tujuan pengembangan technopreneurship, sekurang-kurangnya melibatkan beberapa prinsip: a) internalization, sebuah usaha menemukan pola minat wirausaha; b) paradigma alteration, menunjukkan bahwa usaha pengembangan technopreneurship memiliki semangat perubahan yang memberikan dampak positif; c) initiation, sebagai semangat bahwa usaha yang dijalankan menjadi penggerak-inisiator; d) competition, merupakan pemahaman terhadap bentuk-bentuk persaingan yang sehat.

                        Realisasi fungsi technopreneurship dapat dilaksanakan dengan memberikan support atau dukungan pengembangan start up (usaha rintisan) di bidang digital yang selain dapat meningkatkan angka wirausaha di Indonesia secara umum, dan sivitas akademika UIN Syarif Hidayatullah Jakarta secara khusus. Support tersebut dapat diwujudkan dalam penyediaan kerjasama data center, kepelatihan, penelitian dan pengembangan usaha rintisan di bidang digital."
                        )
                        @endphp
                    </p>
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
