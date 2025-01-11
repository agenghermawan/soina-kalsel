<?php

use App\Http\Controllers\Front\PagesController;
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
    return view('root');
});

Route::get('/soina-club', [PagesController::class, 'program_soina_club'])->name('soina-club');
Route::get('/young-athletes', [PagesController::class, 'program_young_athletes'])->name('young-athletes');
Route::get('/tentang-kami', [PagesController::class, 'program_tentang_kami'])->name('tentang-kami');
Route::get('/misi', [PagesController::class, 'program_misi'])->name('misi');
Route::get('/kontak-kami', [PagesController::class, 'kontak_kami'])->name('kontak-kami');
Route::get('/kemitraan', [PagesController::class, 'kemitraan'])->name('kemitraan');

Route::get('/disabilitas-intelektual', [PagesController::class, 'disabilitas_intelektual'])->name('disabilitas-intelektual');
Route::get('/kalendar-kegiatan', [PagesController::class, 'kalendar_kegiatan'])->name('kalendar-kegiatan');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
