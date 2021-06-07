@extends('layouts.publicPage')

@section('allContent')

<!-- Awal Jumbotron -->
<section class="jumbotron-bg">
    <div class="jumbotron warna-linear text-white">
        <div class="container">
            <h1 class="display-2 text-center">Berita</h1>
            <!-- <p class="lead"><b>Ngodingpintar</b> merupakan tempat berkumpulnya Tutorial pemrograman web, web design, mobile
          terlengkap untuk pemula sampai mahir. tersedia tutorial gratis dan premium yang berkualitas.</p> -->
            <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya..</a> -->
        </div>
    </div>
</section>
<!-- Akhir Jumbotron -->

<div class="container">
    <div class="row">

        @foreach ($contents as $content)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top"
                    style="max-height: 240px; min-height: 190px;"
                    src="{{ asset('storage/'. $content->image) }}"
                    alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('agenda.show', [$content->id]) }}" style="color: black" >
                        <h3 class="card-title mb-1">{{ $content->title }}</h3>
                    </a>
                    <p class="text-secondary"
                        style="font-size: 14px">by {{ $content->user->username }} as BERITA <br> {{ \Carbon\Carbon::parse($content->updated_at)->format('l jS F Y') }}</p>
                    <p class="card-text">{!! Str::words($content->description, 20, ' ...') !!}</p>
                    <a href="{{route('berita.show', [$content->id])}}" >Read more...</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="row mb-4">
        {{$contents->appends(Request::all())->links()}}
    </div>
</div>

@endsection
