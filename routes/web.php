<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

/*
|----------------------------device-width----------------------------------------------
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
Route::post('/admins/login', [AdminLoginController::class, 'store']);
Route::get('/confirm-password', [AdminLoginController::class, 'locked'])
->middleware(['auth', 'throttle:6,1'])
->name('admin.lockcreen');

Route::post('/confirm-password', [AdminLoginController::class, 'unlock']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/students/{user:name}/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
Route::get('/students/{user:name}/profile', [StudentController::class, 'show'])->name('student.profile');


Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/show', [BookController::class, 'show'])->name('show.book');

Route::get('/admins/{user:name}/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admins/{user:name}/profile', [AdminController::class, 'show'])->middleware('auth.basic')->name('admin.profile');
Route::get('/admins/{user:name}/get_students', [AdminController::class, 'get_students'])->name('admin.get_students');
Route::get('/admins/{user:name}/requests', [AdminController::class, 'all_requests'])->name('admin.all_requests');

Route::get('/admins/{user:name}/all_books', [AdminController::class, 'all_books'])->name('admin.all_books');

Route::get('/admins/{user:name}/add_book', [AdminController::class, 'book_view'])->name('admin.add_book_view');
Route::post('/admins/books/add_book', [AdminController::class, 'add_book'])->name('admin.add_book');
Route::get('/admins/edit_book/{id}', [AdminController::class, 'edit_book'])->name('edit_book');
Route::delete('/admins/delete_book/{book}', [AdminController::class, 'delete_book'])->name('delete_book');

Route::get('/admins/{user:name}/shelf', [AdminController::class, 'shelf'])->name('admin.shelf');
Route::post('/admins/add_shelf', [AdminController::class, 'add_shelf'])->name('admin.add_shelf');
Route::get('/admins/{user:name}/add_cupboard', [AdminController::class, 'cupboard'])->name('admin.cupboard');
Route::post('/admins/add_cupboard', [AdminController::class, 'add_cupboard'])->name('admin.add_cupboard');

