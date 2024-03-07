<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function (){
    return view('admin.dashboard.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function (){
    return Inertia::render('Home');
})->name('home');
Route::get('about', function (){
    return Inertia::render('About');
})->name('about');
Route::get('service', function (){
    return Inertia::render('Service');
})->name('service');

Route::get('gallery', function (){
    return Inertia::render('Gallery');
})->name('gallery');

Route::get('serviceDetail', function (){
    return Inertia::render('ServiceDetails');
})->name('service.detail');

Route::get('blogDetail', function (){
    return Inertia::render('BlogDetails');
})->name('blog.detail');

Route::get('blog', function (){
    return Inertia::render('BlogPage');
})->name('blog');

Route::get('contact', function (){
    return Inertia::render('Contact');
})->name('contact');

require __DIR__.'/auth.php';
