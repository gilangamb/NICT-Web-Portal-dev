<?php

namespace App\Http\Controllers;

use App\Role;
use App\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(15);

        return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("roles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            "name" => "string|required|unique:roles"
        ])->validate();

        $new_role = new Role;
        $new_role->name = $request->get('name');
        $new_role->slug = Str::slug($request->get('name'));
        $new_role->save();

        $null = json_encode(array("NULL"));
        $intranet_admin = $request->get('intranet_admin');
        $layanan_fasilitas = $request->get('layanan_fasilitas');
        $internship = $request->get('internship');
        $keuangan = $request->get('keuangan');
        $kepegawaian = $request->get('kepegawaian');
        $aset_bmn = $request->get('aset_bmn');
        $surat_arsip = $request->get('surat_arsip');
        $kms = $request->get('kms');

        $new_type = new Type;
        $new_type->intranet_admin = (!$intranet_admin) ? $null : json_encode($intranet_admin);
        $new_type->layanan_fasilitas = (!$layanan_fasilitas) ? $null : json_encode($layanan_fasilitas);
        $new_type->internship = (!$internship) ? $null : json_encode($internship);
        $new_type->keuangan = (!$keuangan) ? $null : json_encode($keuangan);
        $new_type->kepegawaian = (!$kepegawaian) ? $null : json_encode($kepegawaian);
        $new_type->aset_bmn = (!$aset_bmn) ? $null : json_encode($aset_bmn);
        $new_type->surat_arsip = (!$surat_arsip) ? $null : json_encode($surat_arsip);
        $new_type->kms = (!$kms) ? $null : json_encode($kms);

        $new_role->type()->save($new_type);

        return redirect()->route('roles.create')->with('status', 'Role successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::with(["type"])->findOrFail($id);

        return view("roles.edit", ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::with(['type'])->findOrFail($id);
        // $role->name = $request->get('name');
        // $role->save();

        $null = json_encode(array("NULL"));
        $intranet_admin = $request->get('intranet_admin');
        $layanan_fasilitas = $request->get('layanan_fasilitas');
        $internship = $request->get('internship');
        $keuangan = $request->get('keuangan');
        $kepegawaian = $request->get('kepegawaian');
        $aset_bmn = $request->get('aset_bmn');
        $surat_arsip = $request->get('surat_arsip');
        $kms = $request->get('kms');

        $role->type->intranet_admin = (!$intranet_admin) ? $null : json_encode($intranet_admin);
        $role->type->layanan_fasilitas = (!$layanan_fasilitas) ? $null : json_encode($layanan_fasilitas);
        $role->type->internship = (!$internship) ? $null : json_encode($internship);
        $role->type->keuangan = (!$keuangan) ? $null : json_encode($keuangan);
        $role->type->kepegawaian = (!$kepegawaian) ? $null : json_encode($kepegawaian);
        $role->type->aset_bmn = (!$aset_bmn) ? $null : json_encode($aset_bmn);
        $role->type->surat_arsip = (!$surat_arsip) ? $null : json_encode($surat_arsip);
        $role->type->kms = (!$kms) ? $null : json_encode($kms);

        // $role->type()->update();
        $role->push();

        return redirect()->route('roles.edit', [$id])->with('status', 'Role succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->type()->delete();
        $role->delete();

        return redirect()->route('roles.index')->with('status', 'Role successfully delete');
    }
}
