@extends("layouts.global")

@section("title") Contents list @endsection
@section("pageTitle") Manage Contents @endsection

@section("content")

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <form action="{{route('contents.index')}}">
        <div class="row">
            <div class="col-md-6">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control" type="text"
                    placeholder="Masukan title untuk filter..." />
            </div>

            <div class="col-md-6">
                <input {{Request::get('category') == 'AGENDA' ? 'checked' : ''}}
                    value="AGENDA"
                    name="category" 
                    type="radio"
                    class="form-control" id="agenda">
                <label for="agenda">Agenda</label>

                <input {{Request::get('category') == 'BERITA' ? 'checked' : ''}}
                    value="BERITA" 
                    name="category" 
                    type="radio"
                    class="form-control" id="berita">
                <label for="berita">Berita</label>

                <input type="submit" value="Filter" class="btn btn-light">
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{route('contents.create')}}" class="btn btn-primary">Create content</a>
        </div>
    </div>
    <br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Title</b></th>
            <th><b>Author</b></th>
            <th><b>Description</b></th>
            <th><b>Category</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach($contents as $content)
        <tr>
            <td style="width: 300px">{{$content->title}}</td>
            <td>{{$content->user->username}}</td>
            <td style="width: 520px">{!! Str::words($content->description, 20, ' ...') !!}</td>
            {{-- <td>
                @if($content->image)
                    <img src="{{asset('storage/'.$content->image)}}" width="70px" />
                @else
                N/A
                @endif
            </td> --}}
            <td>
                @if($content->category == "AGENDA")
                    <span class="badge badge-success">
                    {{$content->category}}
                    </span>
                @else
                    <span class="badge badge-info">
                    {{$content->category}}
                    </span>
                @endif
            </td>
            <td>
                <a class="btn btn-info text-white btn-sm"
                    href="{{route('contents.edit', [$content->id])}}">Edit</a>

                <form
                    onsubmit="return confirm('Delete this user permanently?')"
                    class="d-inline"
                    action="{{route('contents.destroy', [$content->id])}}"
                    method="POST">

                    @csrf
                        <input
                            type="hidden"
                            name="_method"
                            value="DELETE">
                        <input
                    type="submit"
                    value="Delete"
                    class="btn btn-danger btn-sm">
                </form>

                <a href="{{route('contents.show', [$content->id])}}"
                    class="btn btn-success btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>

    {{-- mulai paginasi halaman dan membawa query filter ke halaman selanjutnya --}}
    <tfoot>
        <tr>
            <td colspan=10>
                {{$contents->appends(Request::all())->links()}}
            </td>
        </tr>
        </tfoot>
</table>

@endsection
