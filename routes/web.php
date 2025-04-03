<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ContactController;
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
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');



Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// BACKEND ROUTES
Route::get('/blogs/planning', [\App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('sendContactEmail');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('postLogin');

Route::post('/logout', function (){
    session()->forget('logged_in');

    // Redirect to the login page
    return redirect()->route('login');
})->name('logout');

Route::get('/manage', function () {
    return view('manage');
})->middleware('check.loggedin')->name('manage');

Route::prefix('admin')->group(function () {
    // Blog Routes
    Route::get('blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::post('blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('admin.blogs.show');
    Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
});
