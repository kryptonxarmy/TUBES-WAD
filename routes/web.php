<?php

use App\Http\Controllers\EprtController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hehe', function () {
    return view('hehe');
});
Route::get('/dashboardkaprodi', function () {
    return view('/Kaprodi/dashboard');
});
Route::get('/dashboardkaprodi/inputfile', function () {
    return view('/Kaprodi/inputfile');
});

//login
Route::get('/', [LoginController::class, 'index'])->name('login ');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboardkaprodi', [StudentController::class, 'index'])->name('Kaprodi.dashboard')->middleware('auth');
Route::post('/Kaprodi/data', [StudentController::class, 'data'])->name('kaprodi.data');
Route::delete('/dashboardkaprodi/{id}', [StudentController::class, 'delete'])->name('Kaprodi.deleteStudent');
Route::get('/dashboardkaprodi/edit/{id}', [StudentController::class, 'edit'])->name('kaprodi.edit');
Route::put('/dashboardkaprodi/update/{id}', [StudentController::class, 'update'])->name('kaprodi.update');



// ADMIN
Route::get('/admin' , function() {
    return view('/Admin/login');
});
Route::get('/dashboardadmin' , function() {
    return view('/Admin/dashboard');
});
Route::get('/dashboardadmin/inputuser' , function() {
    return view('/Admin/inputuser');
});

Route::get('/dashboardadmin', [UserController::class, 'index'])->name('Admin.dashboard');
Route::post('/Admin/store', [UserController::class, 'store'])->name('admin.store');
Route::delete('/dashboardadmin/{id}', [UserController::class, 'delete'])->name('admin.deleteUser');
Route::get('/dashboardadmin/edit/{id}', [UserController::class, 'edit'])->name('admin.edit');
Route::put('/dashboardadmin/update/{id}', [UserController::class, 'update'])->name('admin.update');

// login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);



// Mahasiswa


// Route::get('/dashboardmahasiswa/inputeprt' , function() {
//     return view('/Mahasiswa/inputeprt');
// });
// Route::get('/dashboardmahasiswa/updateeprt' , function() {
//     return view('/Mahasiswa/updateeprt');
// });

//Erpt Controller
Route::get('/dashboardmahasiswa/eprt', [EprtController::class, 'index'])->name('eprt.dashboard')->middleware('auth');
Route::post('/Eprt/store', [EprtController::class, 'store'])->name('eprt.store');
Route::delete('/dashboardmahasiswa/eprt/{id}', [EprtController::class, 'delete'])->name('eprt.deleteEprt');
Route::get('/dashboardmahasiswa/eprt/edit/{id}', [EprtController::class, 'edit'])->name('eprt.edit');
Route::put('/dashboardmahasiswa/eprt/update/{id}', [EprtController::class, 'update'])->name('eprt.update');

//Jurnal Controller
Route::get('/dashboardmahasiswa/jurnal', [JurnalController::class, 'index'])->name('jurnal.dashboard')->middleware('auth');
Route::post('/Jurnal/store', [JurnalController::class, 'store'])->name('jurnal.store');
Route::delete('/dashboardmahasiswa/jurnal/{id}', [JurnalController::class, 'delete'])->name('jurnal.deletejurnal');
Route::get('/dashboardmahasiswa/jurnal/edit/{id}', [JurnalController::class, 'edit'])->name('jurnal.edit');
Route::put('/dashboardmahasiswa/jurnal/update/{id}', [JurnalController::class, 'update'])->name('jurnal.update');
