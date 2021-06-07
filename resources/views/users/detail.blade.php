@extends('layouts.global')

@section('title') Detail user @endsection
@section('pageTitle') Detail user @endsection


@section('content')

<div class="col-md-8">

    <div class="card">
        <div class="card-body">
            
            @if($user->avatar)
            <img src="{{asset('storage/'. $user->avatar)}}" width="400px" />
            @else
            No avatar
            @endif
            <br>
            <br>
            
            <b>Full Name:</b> <br />
            {{$user->name}}
            <br>

            <br>
            <b>Role:</b>
            <br>
            {{ $user->role->name }}
            <br>

            <br>
            <b>Username:</b><br>
            {{$user->username}}
            <br>

            <br>
            <b>Email:</b><br>
            {{$user->email}}
            <br>

            <br>
            <b>Phone Number</b> <br>
            {{$user->phone}}
            <br>
            
            <br>
            <b>Address</b>
            <br>
            {{$user->address}}
            <br>

        </div>
    </div>
</div>

@endsection
