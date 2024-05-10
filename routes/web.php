<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShippingTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//agency route starts here

Route::get('/', function () {
    return view('agency.index');
})->name('greeny');

Route::get('about', function () {
    return view('agency.aboutus');
})->name('about');

Route::get('contact', function () {
    return view('agency.contactus');
})->name('contact');

Route::get('profile', function () {
    return view('agency.profile');
})->name('profile');

Route::get('wallet', function () {
    return view('agency.wallet');
})->name('wallet');

Route::get('offer', function () {
    return view('agency.offer');
})->name('offer');

Route::get('faq', function () {
    return view('agency.faq');
})->name('faq');

Route::get('privacy', function () {
    return view('agency.privacy');
})->name('privacy');

Route::get('coming-soon', function () {
    return view('agency.coming-soon');
})->name('coming-soon');

Route::get('error', function () {
    return view('agency.error');
})->name('error');

Route::get('blog', function () {
    return view('agency.blog');
})->name('blog');

// Route::get('login', function () {
//     return view('greeny.login');
// })->name('login');

// Route::get('register', function () {
//     return view('greeny.register');
// })->name('register');

Route::get('reset-password', function () {
    return view('agency.reset-password');
})->name('reset-password');

Route::get('change-password', function () {
    return view('agency.change-password');
})->name('change-password');

Route::get('allproducts', function () {
    return view('agency.allproduct');
})->name('allproducts');

Route::get('compare', function () {
    return view('agency.compare');
})->name('compare');

Route::get('wishlist', function () {
    return view('agency.wishlist');
})->name('wishlist');

Route::get('checkout', function () {
    return view('agency.checkout');
})->name('checkout');

//agency route ends here

//admin routes starts here


// Route::get('/admin/users', function () {
//     return view('admin.users.index');
// })->name('admin.users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');


Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('/shipping', ShippingTypeController::class);
    Route::resource('/brand', BrandsController::class);
    Route::resource('/product', ProductController::class);
});
Route::resource('/users', UserController::class);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
