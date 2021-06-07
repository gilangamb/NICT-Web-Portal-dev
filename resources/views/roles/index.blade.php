@extends("layouts.global")

@section("title") Role list @endsection
@section("pageTitle") Manage Role @endsection

@section("content")

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    {{-- <form action="{{route('users.index')}}">
        <div class="row">
            <div class="col-md-6">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control" type="text"
                    placeholder="Masukan email untuk filter..." />
            </div>

            <div class="col-md-6">
                <input {{Request::get('status') == 'ACTIVE' ? 'checked' : ''}}
                    value="ACTIVE"
                    name="status" 
                    type="radio"
                    class="form-control" id="active">
                <label for="active">Active</label>

                <input {{Request::get('status') == 'INACTIVE' ? 'checked' : ''}}
                    value="INACTIVE" 
                    name="status" 
                    type="radio"
                    class="form-control" id="inactive">
                <label for="inactive">Inactive</label>

                <input type="submit" value="Filter" class="btn btn-light">
            </div>
        </div>
    </form> --}}

    <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{route('roles.create')}}" class="btn btn-primary">Create role</a>
        </div>
    </div>
    <br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>No.</b></th>
            <th><b>Role Name</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
            @php
                $nmr = 0;
            @endphp
        @foreach($roles as $role)
        <tr>
            <td style="width: 100px">{{ ++$nmr + ($roles->currentPage()-1) * $roles->perPage() }}</td>
            <td class="px-auto">{{ $role->name }}</td>
            <td style="width: 300px">
                <a class="btn btn-info text-white btn-sm"
                    href="{{route('roles.edit', [$role->id])}}">Edit</a>

                <form
                    onsubmit="return confirm('Delete this user permanently?')"
                    class="d-inline"
                    action="{{route('roles.destroy', [$role->id])}}"
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

                {{-- <a href="{{route('users.show', [$user->id])}}"
                    class="btn btn-success btn-sm">Detail</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>

    {{-- mulai paginasi halaman dan membawa query filter ke halaman selanjutnya --}}
    <tfoot>
        <tr>
            <td colspan=10>
                {{$roles->appends(Request::all())->links()}}
            </td>
        </tr>
    </tfoot>
</table>

@endsection
