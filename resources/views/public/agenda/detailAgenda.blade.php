@extends('layouts.publicPage')

@section('allContent')

<!-- Awal Jumbotron -->
<section class="jumbotron-bg">
    <div class="jumbotron warna-linear text-white">
        <div class="container">
            <h1 class="display-4">{{ $content->title }}</h1>
            <p>by {{ $content->user->username }} as AGENDA <br> {{ \Carbon\Carbon::parse($content->updated_at)->format('l jS F Y') }}</p>
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
                <img class="card-img-top" src="{{asset('storage/'. $content->image)}}" alt="Opss image not found!">
                <div class="card-body">
                    {{-- <h2>Profil Ngodingpintar</h2> --}}
                    {{-- {{ $content->description }} --}}
                    <p>
                    @php
                        // $p = explode(' ', $content->description);
                        $try = nl2br($content->description);
                        echo $try;
                    @endphp
                    </p>
                    {{-- @foreach ($p as $p)
                    <p>{{ $p }}</p>
                    @endforeach --}}
                </div>
            </div>
        </div><!-- Akhir col-8 -->

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
                {{-- <a href="#" class="list-group-item list-group-item-action active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">#1 - Tutorial Bootstrap 4</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius
                        blandit.</p>
                    <small>Muhammad Hafid</small>
                </a> --}}
                @foreach ($indexs as $index)
                <a href="{{ route('agenda.show', [$index->id]) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $index->title }}</h5>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($index->updated_at)->format('l jS F Y') }}</small>
                    </div>
                    <p class="mb-1">{!! Str::words($content->description, 10, ' ...') !!}</p>
                        <small>{{ $content->user->username }}</small>
                    </a>
                    @endforeach
            </div>
            <!-- Akhir Tutorial terbaru -->

        </div><!-- Akhir col-4 -->

    </div>
</div>
<!-- Akhir Content -->

@endsection
