<?php
use App\Http\Controllers\SyahadahCont;
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

Route::get('/', function () {
    return view('welcome');
    // return view('page.daftar_syahadah');
});

Route::get('/daftar-syahadah/{pelatihan_id}',[SyahadahCont::class,'index_daftar']);
Route::get('/syahadah-peserta/{peserta_id}',[SyahadahCont::class,'syahadah_peserta']);

Route::get('/unduh-syahadah/{peserta_id}',[SyahadahCont::class,'download']);