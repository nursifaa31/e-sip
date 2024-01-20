<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SPPTController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('register','register')->name('register');
    Route::post('register','registerSimpan')->name('register.simpan');
    Route::get('login','login')->name('login');
    Route::post('login','loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Profile Controller
Route::middleware(['auth'])->group(function () {
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});

Route::controller(SPPTController::class)->prefix('datasppt')->group( function () {
    Route::get('', 'index')->name('datasppt');
    Route::get('tambah', 'tambah')->name('datasppt.tambah');
    Route::post('tambah', 'simpan')->name('datasppt.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('datasppt.edit');
    Route::post('edit/{id}', 'update')->name('datasppt.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('datasppt.hapus');
});

Route::controller(BerkasController::class)->prefix('berkas')->group( function () {
    Route::get('', 'index')->name('berkas');
    Route::get('tambah', 'tambah')->name('berkas.tambah');
    Route::post('tambah', 'simpan')->name('berkas.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('berkas.edit');
    Route::post('edit/{id}', 'update')->name('berkas.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('berkas.hapus');
});

// routes/web.php

Route::get('/form', function () {
    return view('password');
});

});

