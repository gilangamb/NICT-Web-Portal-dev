@extends("layouts.global")

@section("title") Create Role & Permission @endsection
@section("pageTitle") Create Role & Permission @endsection

@section("content")

<div class="col-md-12">

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        <div  class="align-middle my-3">
            <a href="{{ route('roles.index') }}">
                <span class="oi oi-chevron-left"></span> Back to Roles List
            </a>
        </div>
    @endif

    @if(session('status-danger'))
        <div class="alert alert-danger">
            {{session('status-danger')}}
        </div>
    @endif

    <form enctype="multipart/form-data"
        class="bg-white shadow-sm p-3"
        action="{{route('roles.store')}}"
        method="POST">
        
        @csrf

        <h4>Role</h4>

        <label for="name">Name</label>
        <input value="{{ old('name') }}"
        class="form-control {{$errors->first('name') ? "is-invalid" : ""}} "
        placeholder="Role Name" 
        type="text" 
        name="name" 
        id="name" />
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        <br>

        <h4>Permission</h4>

        <label for="">Intranet Administrator</label>
        <br>

        <input class="form-control {{$errors->first('intranet_admin') ? "is-invalid" : "" }}"
        type="checkbox"
        name="intranet_admin[]"
        id="ADMIN_CREATE"
        value="CREATE">
        <label for="ADMIN_CREATE">Create</label>
        <label for="ADMIN_CREATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('intranet_admin') ? "is-invalid" : "" }}"
            type="checkbox"
            name="intranet_admin[]"
            id="ADMIN_READ"
            value="READ">
        <label for="ADMIN_READ">Read</label>
        <label for="ADMIN_READ" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('intranet_admin') ? "is-invalid" : "" }}"
            type="checkbox"
            name="intranet_admin[]"
            id="ADMIN_UPDATE"
            value="UPDATE">
        <label for="ADMIN_UPDATE">Update</label>
        <label for="ADMIN_UPDATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('intranet_admin') ? "is-invalid" : "" }}"
        type="checkbox"
        name="intranet_admin[]" 
        id="ADMIN_DELETE" 
        value="DELETE">
        <label for="ADMIN_DELETE">Delete</label>
        <label for="ADMIN_DELETE" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('intranet_admin') ? "is-invalid" : "" }}"
        type="checkbox"
        name="intranet_admin[]" 
        id="ADMIN_INDEX" 
        value="INDEX">
        <label for="ADMIN_INDEX">Index</label>

        {{-- <div class="invalid-feedback">
            {{$errors->first('intranet_admin')}}
        </div> --}}

        <br>
        <br>

        <label for="">Layanan & Fasilitas</label>
        <br>
        <input class="form-control {{$errors->first('layanan_fasilitas') ? "is-invalid" : "" }}"
        type="checkbox"
        name="layanan_fasilitas[]"
        id="LAYANAN_CREATE"
        value="CREATE">
        <label for="LAYANAN_CREATE">Create</label>
        <label for="LAYANAN_CREATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('layanan_fasilitas') ? "is-invalid" : "" }}"
            type="checkbox"
            name="layanan_fasilitas[]"
            id="LAYANAN_READ"
            value="READ">
        <label for="LAYANAN_READ">Read</label>
        <label for="LAYANAN_READ" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('layanan_fasilitas') ? "is-invalid" : "" }}"
            type="checkbox"
            name="layanan_fasilitas[]"
            id="LAYANAN_UPDATE"
            value="UPDATE">
        <label for="LAYANAN_UPDATE">Update</label>
        <label for="LAYANAN_UPDATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('layanan_fasilitas') ? "is-invalid" : "" }}"
        type="checkbox"
        name="layanan_fasilitas[]" 
        id="LAYANAN_DELETE" 
        value="DELETE">
        <label for="LAYANAN_DELETE">Delete</label>
        <label for="LAYANAN_DELETE" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('layanan_fasilitas') ? "is-invalid" : "" }}"
        type="checkbox"
        name="layanan_fasilitas[]" 
        id="LAYANAN_INDEX" 
        value="INDEX">
        <label for="LAYANAN_INDEX">Index</label>

        {{-- <div class="invalid-feedback">
            {{$errors->first('layanan_fasilitas')}}
        </div> --}}
        <br>
        <br>

        <label for="">SI Internship</label>
        <br>
        <input class="form-control {{$errors->first('internship') ? "is-invalid" : "" }}"
            type="checkbox"
            name="internship[]"
            id="INTERN_CREATE"
            value="CREATE">
        <label for="INTERN_CREATE">Create</label>
        <label for="INTERN_CREATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('internship') ? "is-invalid" : "" }}"
            type="checkbox"
            name="internship[]"
            id="INTERN_READ"
            value="READ">
        <label for="INTERN_READ">Read</label>
        <label for="INTERN_READ" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('internship') ? "is-invalid" : "" }}"
            type="checkbox"
            name="internship[]"
            id="INTERN_UPDATE"
            value="UPDATE">
        <label for="INTERN_UPDATE">Update</label>
        <label for="INTERN_UPDATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('internship') ? "is-invalid" : "" }}"
        type="checkbox"
        name="internship[]" 
        id="INTERN_DELETE" 
        value="DELETE">
        <label for="INTERN_DELETE">Delete</label>
        <label for="INTERN_DELETE" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('internship') ? "is-invalid" : "" }}"
        type="checkbox"
        name="internship[]" 
        id="INTERN_INDEX" 
        value="INDEX">
        <label for="INTERN_INDEX">Index</label>

        <br>
        <br>

        <label for="">SI Keuangan</label>
        <br>
        <input class="form-control {{$errors->first('keuangan') ? "is-invalid" : "" }}"
            type="checkbox"
            name="keuangan[]"
            id="UANG_CREATE"
            value="CREATE">
        <label for="UANG_CREATE">Create</label>
        <label for="UANG_CREATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('keuangan') ? "is-invalid" : "" }}"
            type="checkbox"
            name="keuangan[]"
            id="UANG_READ"
            value="READ">
        <label for="UANG_READ">Read</label>
        <label for="UANG_READ" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('keuangan') ? "is-invalid" : "" }}"
            type="checkbox"
            name="keuangan[]"
            id="UANG_UPDATE"
            value="UPDATE">
        <label for="UANG_UPDATE">Update</label>
        <label for="UANG_UPDATE" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('keuangan') ? "is-invalid" : "" }}"
        type="checkbox"
        name="keuangan[]" 
        id="UANG_DELETE" 
        value="DELETE">
        <label for="UANG_DELETE">Delete</label>
        <label for="UANG_DELETE" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('keuangan') ? "is-invalid" : "" }}"
        type="checkbox"
        name="keuangan[]" 
        id="UANG_INDEX" 
        value="INDEX">
        <label for="UANG_INDEX">Index</label>

        <br>
        <br>

        <label for="">SI Kepegawaian</label>
        <br>
        <input class="form-control {{$errors->first('kepegawaian') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kepegawaian[]"
            id="PEGAWAI_C"
            value="CREATE">
        <label for="PEGAWAI_C">Create</label>
        <label for="PEGAWAI_C" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kepegawaian') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kepegawaian[]"
            id="PEGAWAI_R"
            value="READ">
        <label for="PEGAWAI_R">Read</label>
        <label for="PEGAWAI_R" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kepegawaian') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kepegawaian[]"
            id="PEGAWAI_U"
            value="UPDATE">
        <label for="PEGAWAI_U">Update</label>
        <label for="PEGAWAI_U" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kepegawaian') ? "is-invalid" : "" }}"
        type="checkbox"
        name="kepegawaian[]" 
        id="PEGAWAI_D" 
        value="DELETE">
        <label for="PEGAWAI_D">Delete</label>
        <label for="PEGAWAI_D" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('kepegawaian') ? "is-invalid" : "" }}"
        type="checkbox"
        name="kepegawaian[]" 
        id="PEGAWAI_I" 
        value="INDEX">
        <label for="PEGAWAI_I">Index</label>

        <br>
        <br>

        <label for="">E-Assest BMN</label>
        <br>
        <input class="form-control {{$errors->first('aset_bmn') ? "is-invalid" : "" }}"
            type="checkbox"
            name="aset_bmn[]"
            id="ASET_C"
            value="CREATE">
        <label for="ASET_C">Create</label>
        <label for="ASET_C" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('aset_bmn') ? "is-invalid" : "" }}"
            type="checkbox"
            name="aset_bmn[]"
            id="ASET_R"
            value="READ">
        <label for="ASET_R">Read</label>
        <label for="ASET_R" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('aset_bmn') ? "is-invalid" : "" }}"
            type="checkbox"
            name="aset_bmn[]"
            id="ASET_U"
            value="UPDATE">
        <label for="ASET_U">Update</label>
        <label for="ASET_U" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('aset_bmn') ? "is-invalid" : "" }}"
        type="checkbox"
        name="aset_bmn[]" 
        id="ASET_D" 
        value="DELETE">
        <label for="ASET_D">Delete</label>
        <label for="ASET_D" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('aset_bmn') ? "is-invalid" : "" }}"
        type="checkbox"
        name="aset_bmn[]" 
        id="ASET_I" 
        value="INDEX">
        <label for="ASET_I">Index</label>

        <br>
        <br>

        <label for="">SI Surat & Arsip</label>
        <br>
        <input class="form-control {{$errors->first('surat_arsip') ? "is-invalid" : "" }}"
            type="checkbox"
            name="surat_arsip[]"
            id="SURAT_C"
            value="CREATE">
        <label for="SURAT_C">Create</label>
        <label for="SURAT_C" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('surat_arsip') ? "is-invalid" : "" }}"
            type="checkbox"
            name="surat_arsip[]"
            id="SURAT_R"
            value="READ">
        <label for="SURAT_R">Read</label>
        <label for="SURAT_R" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('surat_arsip') ? "is-invalid" : "" }}"
            type="checkbox"
            name="surat_arsip[]"
            id="SURAT_U"
            value="UPDATE">
        <label for="SURAT_U">Update</label>
        <label for="SURAT_U" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('surat_arsip') ? "is-invalid" : "" }}"
        type="checkbox"
        name="surat_arsip[]" 
        id="SURAT_D" 
        value="DELETE">
        <label for="SURAT_D">Delete</label>
        <label for="SURAT_D" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('surat_arsip') ? "is-invalid" : "" }}"
        type="checkbox"
        name="surat_arsip[]" 
        id="SURAT_I" 
        value="INDEX">
        <label for="SURAT_I">Index</label>

        <br>
        <br>

        <label for="">Knowledge Management System</label>
        <br>
        <input class="form-control {{$errors->first('kms') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kms[]"
            id="KMS_C"
            value="CREATE">
        <label for="KMS_C">Create</label>
        <label for="KMS_C" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kms') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kms[]"
            id="KMS_R"
            value="READ">
        <label for="KMS_R">Read</label>
        <label for="KMS_R" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kms') ? "is-invalid" : "" }}"
            type="checkbox"
            name="kms[]"
            id="KMS_U"
            value="UPDATE">
        <label for="KMS_U">Update</label>
        <label for="KMS_U" class="mr-2 ml-5">|</label>

        <input class="form-control {{$errors->first('kms') ? "is-invalid" : "" }}"
        type="checkbox"
        name="kms[]" 
        id="KMS_D" 
        value="DELETE">
        <label for="KMS_D">Delete</label>
        <label for="KMS_D" class="mr-2 ml-5">|</label>
        
        <input class="form-control {{$errors->first('kms') ? "is-invalid" : "" }}"
        type="checkbox"
        name="kms[]" 
        id="KMS_I" 
        value="INDEX">
        <label for="KMS_I">Index</label>

        <br>
        <br>

        <input class="btn btn-success" type="submit" value="Save" />
    </form>
</div>
@endsection