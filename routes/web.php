<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.beranda');
});

Route::get('/profil/visi-misi', function () {
    return view('public.profil.visimisi');
});

Route::get('/profil/fungsi', function () {
    return view('public.profil.fungsi');
});

Route::get('/profil/sejarah', function () {
    return view('public.profil.sejarah');
});

Route::get('/agenda', 'ContentController@indexAgenda')->name('agenda');
Route::get('/agenda/{id}', 'ContentController@showAgenda')->name('agenda.show');

Route::get('/berita', 'ContentController@indexBerita')->name('berita');
Route::get('/berita/{id}', 'ContentController@showBerita')->name('berita.show');

Route::resource("users", 'UserController');
Route::resource("roles", 'RoleController');
Route::resource("contents", 'ContentController');

Auth::routes();

Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");


Route::get('/admin/back-office/home', 'HomeController@index')->name('home');
