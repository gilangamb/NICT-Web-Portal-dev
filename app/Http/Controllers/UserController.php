<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate(10);

        $filterKeyword = $request->get('keyword');
        $status = $request->get('status');

        if ($filterKeyword) {
            if ($status) {
                $users = User::where('email', 'LIKE', "%$filterKeyword%")
                    ->where('status', $status)
                    ->paginate(10);
            } else {
                $users = User::where('email', 'LIKE', "%$filterKeyword%")->paginate(10);
            }
        } elseif ($status) {
            $users = User::where('status', $status)
                ->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        return view("users.index", ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view("users.create", compact("roles"));
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
            "name" => "required|min:5|max:100",
            "username" => "required|min:5|max:20|unique:users",
            "role_id" => "required",
            "phone" => "required|digits_between:8,14",
            "address" => "required|min:8|max:200",
            "avatar" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "password_confirmation" => "required|same:password"
        ])->validate();

        $new_user = new User;

        $new_user->name = $request->get('name');
        $new_user->username = $request->get('username');
        $new_user->role_id = $request->get('role_id');
        $new_user->name = $request->get('name');
        $new_user->address = $request->get('address');
        $new_user->phone = $request->get('phone');
        $new_user->email = $request->get('email');
        $new_user->password = Hash::make($request->get('password'));
        // $new_user->status = "ACTIVE";

        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatars', 'public');
            $new_user->avatar = $file;
        }

        $new_user->save();
        return redirect()->route('users.create')->with('status', 'User successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with(["role"])->findOrFail($id);
        return view('users.detail', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with(["role"])->findOrFail($id);
        $roles = Role::all();

        return view('users.edit', ['user' => $user, 'roles' => $roles]);
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
        Validator::make($request->all(), [
            "name" => "required|min:5|max:100",
            "role_id" => "required",
            "phone" => "required|digits_between:8,14",
            "address" => "required|min:8|max:200",
        ])->validate();

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->role_id = $request->get('role_id');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->status = $request->get('status');

        if ($request->file('avatar')) {
            if ($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))) {
                Storage::delete('public/' . $user->avatar);
            }
            $file = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $file;
        }

        $user->save();
        return redirect()->route('users.edit', [$id])->with('status', 'User succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::delete('public/' . $user->avatar);
        $user->delete();

        return redirect()->route('users.index')->with('status', 'User successfully delete');
    }
}
