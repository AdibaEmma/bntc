<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
})->name('landing.page');

Auth::routes();

Route::get('/register', [RegisterController::class, 'index'])->name('student.register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('student.login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/admins/register', [AdminRegisterController::class, 'index'])->name('admin.register');
Route::post('/admins/register', [AdminRegisterController::class, 'store']);
Route::get('/admins/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('admins/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/students/{user:name}/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
Route::get('/students/{user:name}/profile', [StudentController::class, 'show'])->name('student.profile');
