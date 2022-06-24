<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KeteranganController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
->middleware('auth')
->name('logout');

require __DIR__.'/auth.php';

Route::get('admin', function() {
    return view('admin.index');
})->middleware('role:admin')->name('admin.index');

Route::get('student', function() {
    return view('student.index');
})->middleware('role:user')->name('student.index');

Route::resource('admin', AdminController::class)->middleware('role:admin');
Route::resource('student', StudentController::class)->middleware('role:user');
Route::resource('keterangan', KeteranganController::class)->middleware('role:user');
Route::resource('studentGroups', StudentGroupController::class)->middleware('role:admin');
Route::resource('rayons', RayonController::class)->middleware('role:admin');
Route::resource('registers', RegisterController::class)->middleware('role:admin');
Route::resource('absensi', AbsensiController::class)->middleware('role:admin');
Route::resource('user-dashboard', StudentController::class)->middleware('role:user');
Route::resource('upload', KeteranganController::class)->middleware('role:user');
Route::resource('absensi_tidakmasuk', AbsenController::class)->middleware('role:admin');
