@extends('layouts.global')

@section('title') Detail content @endsection
@section('pageTitle') Detail content @endsection


@section('content')

<div class="col-md-8">

    <div class="card">
        <img class="card-img-top" src="{{asset('storage/'. $content->image)}}" alt="Opss image not found!">
        <div class="card-body">
            
            {{-- @if($content->image)
            <img src="{{asset('storage/'. $content->image)}}" width="400px" />
            @else
            No image
            @endif
            <br>
            <br> --}}

            <b>Title:</b>
            {{$content->title}}
            <br>

            <br>
            <b>Author:</b>
            {{ $content->user->username }}
            {{-- created on {{ \Carbon\Carbon::parse($content->updated_at)->format('l jS F Y') }} --}}
            <br>

            <br>
            <b>Created at:</b>
            {{ \Carbon\Carbon::parse($content->updated_at)->format('l jS F Y') }}
            <br>

            <br>
            <b>Category:</b>
            <br>
            {{ $content->category }}
            <br>

            <br>
            <b>Description:</b>
            <br>
            <p>
            @php
                echo nl2br($content->description);
            @endphp
            </p>
            {{-- {{ $content->description }} --}}
            <br>

            {{-- <br>
            <b>contentname:</b><br>
            {{$content->contentname}}
            <br>

            <br>
            <b>Email:</b><br>
            {{$content->email}}
            <br>

            <br>
            <b>Phone Number</b> <br>
            {{$content->phone}}
            <br>
            
            <br>
            <b>Address</b>
            <br>
            {{$content->address}}
            <br> --}}

        </div>
    </div>
</div>

@endsection
