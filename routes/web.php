<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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
});
Route::get('/dashboardkaprodi', function () {
    return view('/Kaprodi/dashboard');
});
Route::get('/dashboardkaprodi/inputfile', function () {
    return view('/Kaprodi/inputfile');
});
Route::get('/dashboardmahasiswa', function () {
    return view('/Mahasiswa/dashboard');
});

Route::get('/Kaprodi', [StudentController::class, 'dashboard'])->name('Kaprodi.dashboard');
Route::post('/showroom/data', [StudentController::class, 'data'])->name('kaprodi.data');