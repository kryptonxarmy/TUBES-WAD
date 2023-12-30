<?php

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
Route::get('/dashboardkaprodi', function () {
    return view('/Kaprodi/dashboard');
});
Route::get('/dashboardkaprodi/inputfile', function () {
    return view('/Kaprodi/inputfile');
});
Route::get('/dashboardmahasiswa', function () {
    return view('/Mahasiswa/dashboard');
});

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboardkaprodi', [StudentController::class, 'index'])->name('Kaprodi.dashboard');
Route::post('/Kaprodi/data', [StudentController::class, 'data'])->name('kaprodi.data');
Route::delete('/dashboardkaprodi/{id}', [StudentController::class, 'delete'])->name('Kaprodi.deleteStudent');

// routes/web.php

Route::get('/dashboardkaprodi/edit/{id}', [StudentController::class, 'edit'])->name('kaprodi.edit');
Route::put('/dashboardkaprodi/update/{id}', [StudentController::class, 'update'])->name('kaprodi.update');

Route::get('/dashboardkaprodi', [StudentController::class, 'index'])->name('Kaprodi.dashboard');



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
Route::post('/Kaprodi/store', [UserController::class, 'store'])->name('admin.store');
Route::delete('/dashboardadmin/{id}', [UserController::class, 'delete'])->name('admin.deleteUser');

// routes/web.php

Route::get('/dashboardadmin/edit/{id}', [UserController::class, 'edit'])->name('admin.edit');
Route::put('/dashboardadmin/update/{id}', [UserController::class, 'update'])->name('admin.update');

Route::get('/dashboardadmin', [UserController::class, 'index'])->name('Admin.dashboard');

// login
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


