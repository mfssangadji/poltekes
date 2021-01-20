<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginpost', 'AuthController@loginpost');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/informasi', 'WelcomeController@informasi')->name('pinformasi');
Route::get('/informasi/{id}', 'WelcomeController@dinformasi');
Route::get('/sdm/{jid}', 'WelcomeController@sdm_index')->name('sdm');
Route::get('/sop-surat-masuk', 'WelcomeController@sop_surat_masuk')->name('sop_surat_masuk');
Route::get('/sop-surat-keluar', 'WelcomeController@sop_surat_keluar')->name('sop_surat_keluar');
Route::get('/struktur-organisasi', 'WelcomeController@struktur_organisasi')->name('struktur_organisasi');
Route::get('/tentang', 'WelcomeController@tentang')->name('tentang');
Route::post(config('app.root').'/json/{jid}/pegawai/', 'PegawaiController@json_pegawai_index');

Route::group(['middleware' => 'auth'], function(){
	Route::get(config('app.root').'/init/run/doseninternal', 'FeederController@doseninternal');
	Route::get(config('app.root').'/init/run/dosenluar', 'FeederController@dosenluar');
	Route::get(config('app.root').'/dashboard', function () {
	    return view('auths.dashboard');
	})->name('dashboard');

	Route::get(config('app.root').'/json/users/{id}', 'UsersController@json_user_edit');
	Route::post(config('app.root').'/json/users', 'UsersController@json_user_index');
	Route::resource(config('app.root').'/users', 'UsersController', [
		'names' => [
			'index' => 'users',
			'create' => 'users.create',
			'store' => 'users.store',
		]
	]);

	Route::get(config('app.root').'/json/pegawai/{id}', 'PegawaiController@json_pegawai_edit');
	
	Route::get(config('app.root').'/pegawai/{jid}/data', 'PegawaiController@index');
	Route::post(config('app.root').'/pegawai', 'PegawaiController@store');
	Route::put(config('app.root').'/pegawai/{id}', 'PegawaiController@update');
	Route::delete(config('app.root').'/pegawai/{id}', 'PegawaiController@destroy');

	Route::get(config('app.root').'/json/arsip/{id}', 'ArsipController@json_arsip_edit');
	Route::post(config('app.root').'/json/arsip', 'ArsipController@json_arsip_index');
	Route::get(config('app.root').'/arsip/download/{id}', 'ArsipController@download');
	Route::resource(config('app.root').'/arsip', 'ArsipController', [
		'names' => [
			'index' => 'arsip',
			'create' => 'arsip.create',
			'store' => 'arsip.store',
		]
	]);

	Route::resource(config('app.root').'/informasi', 'InformasiController', [
		'names' => [
			'index' => 'informasi',
			'create' => 'informasi.create',
			'store' => 'informasi.store',
		]
	]);
});