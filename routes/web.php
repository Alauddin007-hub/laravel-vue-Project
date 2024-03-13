<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserTypeController;
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


Route::controller(CategoryController::class)->group(function(){
    Route::get('categories', 'index')->name('category');
    Route::get('category/create', 'create')->name('category.post');
    Route::post('category', 'store')->name('category.store');
    Route::get('category/edit/{id}', 'edit')->name('category.edit');
    Route::post('category/update/{id}', 'update')->name('category.update');
    Route::get('category/delete/{id}', 'destroy')->name('category.delete');
});
Route::controller(MedicineController::class)->group(function(){
    Route::get('medicines', 'index')->name('medicine');
    Route::get('medicine/create', 'create')->name('medicine.post');
    Route::post('medicine/store', 'store')->name('medicine.store');
    Route::post('medicine/show/{id}', 'show')->name('medicine.show');
    Route::get('medicine/edit/{id}', 'edit')->name('medicine.edit');
    Route::post('medicine/update/{id}', 'update')->name('medicine.update');
    Route::get('medicine/delete/{id}', 'destroy')->name('medicine.delete');
});
Route::controller(SupplierController::class)->group(function(){
    Route::get('suppliers', 'index')->name('suppliers');
    Route::get('suppliers/create', 'create')->name('suppliers.post');
    Route::post('suppliers/store', 'store')->name('suppliers.store');
    Route::get('suppliers/show/{id}', 'show')->name('suppliers.show');
    Route::get('suppliers/edit/{id}', 'edit')->name('suppliers.edit');
    Route::post('suppliers/update/{id}', 'update')->name('suppliers.update');
    Route::get('suppliers/delete/{id}', 'destroy')->name('suppliers.delete');
});
Route::controller(CustomerController::class)->group(function(){
    Route::get('customers', 'index')->name('customers');
    Route::get('customers/create', 'create')->name('customers.post');
});
Route::controller(OrderController::class)->group(function(){
    Route::get('order', 'index')->name('orders');
    Route::get('order/create', 'create')->name('order.post');
});
Route::controller(SaleController::class)->group(function(){
    Route::get('sales', 'index')->name('sales');
    Route::get('sale/create', 'create')->name('sale.post');
});
Route::controller(UserTypeController::class)->group(function(){
    Route::get('user_type', 'index')->name('user.type');
    Route::get('user/type', 'create')->name('user.type.post');
});

require __DIR__.'/auth.php';
