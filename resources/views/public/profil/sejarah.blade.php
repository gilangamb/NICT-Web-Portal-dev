@extends('layouts.publicPage')

@section('allContent')

<!-- Awal Jumbotron -->
<section class="profil-company-bg">
    <div class="jumbotron warna-linear text-white">
        <div class="container py-5">
            <h1 class="display-3 text-center">Sejarah</h1>
        </div>
    </div>
</section>
<!-- Akhir Jumbotron -->

<!-- Awal Content -->
<div class="container">
    <div class="row">
            <!-- Awal col-8 -->
            <div class="card mb-5">
                <div class="card-body">
                    <h5>Sejarah Awal</h5>
                    <p class="text-secondary">
                        Pada tahun 2006 terdapat nota kesepahaman antara Menteri Kominfo bersama Rektor UIN Syarif Hidayatullah Jakarta terkait dengan pertukaran tenaga ahli, pendidikan pelatihan, penelitian pengembangan dan pengkajian. Nota kesepahaman bersama itu kemudian ditindaklanjuti dengan perjanjian kerja sama (PKS) di tahun yang sama antara Kepala Badan Litbang SDM dengan Rektor UIN Syarif Hidayatullah Jakarta tentang Kemitraan Bidang TIK, termasuk pendidikan dan pelatihan, penelitian pengembangan, dan pertukaran tenaga ahli antara kedua belah pihak.
                    </p>
                    <img src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/03/Kementerian-Kominfo-UIN-Syarif-Hidayatullah-Jakarta-Kerjasama-NICT-HRD_0.jpg" alt="Opss image not found!">
                    <p class="text-secondary">Kredit: Kominfo-2013</p>
                    <p class="text-secondary">
                        @php
                            echo nl2br("Pada tahun 2007 terdapat loan agreement antara Pemerintah Korea Selatan dengan Pemerintah Indonesia terkait pengembangan TIK. Dan pada tahun 2008, gedung BPRTIK, yang juga bernama National Information and Communication Technologi-Human Resource Development (NICT-HRD), mulai dibangun melalui pendanaan softloan senilai total 21 juta dollar AS dari Pemerintah Korea Selatan pada tahun 2007.

                            Kemudian pada tahun 2011, dibuat kembali nota kesepahaman yang disepakati oleh Menteri Kominfo dan Menteri Agama yang menjabat ketika itu. Nota kesepahaman tersebut terkait dengan program pembangunan karakter bangsa dengan pemanfaatan teknologi informasi dan komunikasi melalui pendidikan agama dan keagamaan.

                            Nota kesepahaman tersebut kemudian diikuti dengan PKS Nomor: 446/KOMINFO/BLSDM/HK.03.01/12/2013, tanggal 23 Desember 2013, antara Kementerian Kominfo dengan UIN Syarif Hidayatullah Jakarta tentang Penggunaan dan Pemanfaatan NICT-HRD. Dalam PKS tersebut disebutkan bahwa perjanjian kedua belah pihak berlaku selama 6 (enam) tahun sejak tanggal PKS ditandatangani.")
                        @endphp
                    </p>
                    <h5>Program Kegiatan BPRTIK dalam Pengelolaan Badan Litbang SDM</h5>
                    <p class="text-secondary">
                        @php
                            echo nl2br("BPRTIK sendiri secara resmi dikelola oleh Kementerian Kominfo melalui Badan Litbang SDM sejak 15 Desember 2010. Selama dikelola oleh Badan Litbang SDM, BPRTIK telah melaksanakan sejumlah program, seperti program pendidikan dan pelatihan (diklat) bidang kominfo bagi seluruh lapisan masyarakat, mulai dari aparatur pemerintah, tenaga pendidik, angkatan kerja muda, penyandang disabilitas, anak-anak, dan perempuan.

                            Dalam laporan yang disampaikan oleh Sekretaris Badan Litbang SDM, Haryati disebutkan bahwa selama 9 tahun pengelolaan BPRTIK oleh Badan Litbang SDM, telah menghasilkan lulusan diklat, sebagai berikut: 1) Pelatihan bagi Aparatur Pemerintah yang dilaksanakan mulai tahun 2011 sampai dengan 2019, sebanyak 4.426 orang; 2) Pelatihan bagi Wanita, Ibu Rumah Tangga, dan Guru yang dilaksanakan mulai tahun 2013 sampai dengan 2019, sebanyak 2.199 orang; 3) Pelatihan bagi Pelajar SMA/SMK/Sederajat dilaksanakan sejak tahun dari 2013 sampai dengan 2019, sebanyak 24.852 orang; 4) Pelatihan bagi Anak-anak (usia TK dan SD) dilaksanakan pada tahun 2013 dan 2016 sampai dengan 2019, sebanyak 1.059 anak; 5) Pelatihan bagi Disabilitas baru mulai dilaksanakan pada tahun 2015 dengan menghasilkan 820 orang peserta pelatihan; dan 6) Pelatihan bagi Angkatan Kerja Muda yang juga baru dilaksanakan pada tahun 2015 sampai dengan 2019, sebanyak 5.318 orang.

                            Melalui program kegiatan di BPRTIK, Badan Litbang SDM telah memberikan diklat di bidang TIK bagi sejumlah total 38.674 orang.")
                        @endphp
                    </p>
                    <img src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/03/20200219153438-foto3.jpg" alt="Opss image not found!">
                    <p class="text-secondary">Kredit: Kominfo-2020</p>
                    <h5>Penyerahan kepada Kemeterian Agama</h5>
                    <p class="text-secondary">
                        Pada tanggal 23 Desember 2019 lalu, merupakan proses awal pengalihan status BMN BPRTIK dari Kementerian Kominfo ke Kementerian Agama. Pada saat itu Kementerian Kominfo melalui Sekretaris Badan Litbang SDM menyerahkan operasional pengelolaan BPRTIK –senilai total Rp169.913.281.748,00 yang terdiri atas gedung dan bangunan, peralatan dan mesin, jaringan, aset tetap lainnya, dan aset tak berwujud lainnya– kepada UIN Syarif Hidayatullah yang diterima oleh Kepala Biro Administrasi Umum dan Kepegawaian.
                    </p>
                    <img src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/03/20200219153636-foto1.jpg" alt="Opss image not found!">
                    <p class="text-secondary">Kredit: Kominfo-2020</p>
            </div>
        </div>
        <!-- Akhir col-10 -->

    </div>
</div>
<!-- Akhir Content -->

@endsection
