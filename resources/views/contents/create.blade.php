@extends("layouts.global")

@section("title") Create Content @endsection
@section("pageTitle") Create Content @endsection

@section("content")

<div class="col-md-8">

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        <div  class="align-middle my-3">
            <a href="{{ route('contents.index') }}">
                <span class="oi oi-chevron-left"></span> Back to Contents List
            </a>
        </div>
    @endif

    <form enctype="multipart/form-data"
        class="bg-white shadow-sm p-3"
        action="{{route('contents.store')}}"
        method="POST">
        
        @csrf

        <label for="title">Title</label>
        <input value="{{ old('title') }}"
        class="form-control {{$errors->first('title') ? "is-invalid" : ""}} "
        placeholder="Title" 
        type="text" 
        name="title" 
        id="title" />
        <div class="invalid-feedback">
            {{$errors->first('title')}}
        </div>
        <br>

        {{-- <label for="description">Description</label>
        <input value="{{old('description')}}"
        class="form-control {{$errors->first('description') ? "is-invalid" : ""}}"
        placeholder="Description" 
        type="text" 
        name="description" 
        id="description" />
        <div class="invalid-feedback">
            {{$errors->first('description')}}
        </div>
        <br> --}}

        <label for="description">Description</label>
        <textarea name="description"
            id="description"
            class="form-control {{$errors->first('description') ? "is-invalid" : ""}}">{{old('description')}}</textarea>
        <div class="invalid-feedback">
            {{$errors->first('description')}}
        </div>
        <br>

        <label for="">Category</label>
        <br>
        <input
            value="AGENDA" 
            type="radio" 
            class="form-control"
            id="agenda" name="category">
        <label for="agenda">Agenda</label>

        <input
            value="BERITA" 
            type="radio" 
            class="form-control"
            id="berita" name="category">
        <label for="berita">Berita</label>
        <div class="invalid-feedback">
            {{$errors->first('category')}}
        </div>
        <br><br>

        <label for="image">Image Thumbnail</label>
        <br>
        <input id="image"
        name="image" 
        type="file"
        class="form-control {{$errors->first('image') ? "is-invalid" : ""}}">
        <div class="invalid-feedback">
            {{$errors->first('image')}}
        </div>
        <br>
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>

@endsection
