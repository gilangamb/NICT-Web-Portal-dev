@extends("layouts.global")

@section("title") Create User @endsection
@section("pageTitle") Create User @endsection

@section("content")

<div class="col-md-8">

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        <div  class="align-middle my-3">
            <a href="{{ route('users.index') }}">
                <span class="oi oi-chevron-left"></span> Back to Users List
            </a>
        </div>
    @endif

    <form enctype="multipart/form-data"
        class="bg-white shadow-sm p-3"
        action="{{route('users.store')}}"
        method="POST">
        
        @csrf

        <label for="name">Name</label>
        <input value="{{ old('name') }}"
        class="form-control {{$errors->first('name') ? "is-invalid" : ""}} "
        placeholder="Full Name" 
        type="text" 
        name="name" 
        id="name" />
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        <br>

        <label for="username">Username</label>
        <input value="{{old('username')}}"
        class="form-control {{$errors->first('username') ? "is-invalid" : ""}}"
        placeholder="username" 
        type="text" 
        name="username" 
        id="username" />
        <div class="invalid-feedback">
            {{$errors->first('username')}}
        </div>
        <br>

        <label for="">
            Roles
        </label>
        <br>
        <select name="role_id"
            class="form-control {{$errors->first('role_id') ? "is-invalid" : ""}}"
            id="role_id">
            @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            {{$errors->first('role_id')}}
        </div>

        <br>

        <label for="phone">Phone number</label>
        <br>
        <input value="{{old('phone')}}" 
        type="text" 
        name="phone"
        class="form-control {{$errors->first('phone') ? "is-invalid" : ""}} ">
        <div class="invalid-feedback">
            {{$errors->first('phone')}}
        </div>
        <br>

        <label for="address">Address</label>
        <textarea name="address"
        id="address" class="form-control {{$errors->first('address') ? "is-invalid" : ""}}">{{old('address')}}</textarea>
        <div class="invalid-feedback">
            {{$errors->first('address')}}
        </div>
        <br>

        <label for="avatar">Avatar image</label>
        <br>
        <input id="avatar"
        name="avatar" 
        type="file"
        class="form-control {{$errors->first('avatar') ? "is-invalid" : ""}}">
        <div class="invalid-feedback">
            {{$errors->first('avatar')}}
        </div>

        <hr class="my-4">
        <label for="email">Email</label>
        <input value="{{old('email')}}"
        class="form-control {{$errors->first('email') ? "is-invalid" : ""}}"
        placeholder="user@mail.com"
        type="text" 
        name="email" 
        id="email" />
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        <br>

        <label for="password">Password</label>
        <input class="form-control {{$errors->first('password') ? "isinvalid" : ""}}"
        placeholder="password" 
        type="password" 
        name="password" 
        id="password" />
        <div class="invalid-feedback">
            {{$errors->first('password')}}
        </div>
        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control {{$errors->first('password_confirmation') ? "is-invalid" : ""}}"
        placeholder="password confirmation" 
        type="password"
        name="password_confirmation" 
        id="password_confirmation" />
        <div class="invalid-feedback">
            {{$errors->first('password_confirmation')}}
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>

@endsection
