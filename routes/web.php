<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/shop/{id}', [PageController::class, 'shopDetails'])->name('shop.details');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::post('/checkout/place', [\App\Http\Controllers\OrderController::class, 'placeOrder'])->name('checkout.place');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/my-orders', [PageController::class, 'myOrders'])->name('my-orders');
Route::get('/account-details', [PageController::class, 'accountDetails'])->name('account-details');
Route::post('/account-details/update', [AuthController::class, 'updateProfile'])->name('account-details.update');
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
// Route::post('/signup', [AuthController::class, 'register'])->name('signup.post');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PublicUserController;

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('admin.dashboard');
    Route::get('/task', [DashboardController::class, "task"])->name('task');

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, "index"])->name('products.index');
        Route::get('/create', [ProductController::class, "create"])->name('products.create');
        Route::post('/store', [ProductController::class, "store"])->name('product.store');
        Route::get('/{id}/edit', [ProductController::class, "edit"])->name('product.edit');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::post('/{id}/stock/update', [ProductController::class, "stockUpdate"])->name('stock.update');
    });

    // Orders
    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, "index"])->name('orders.index');
        Route::get('/view/{id}', [OrderController::class, "view"])->name('order.view');
        Route::put('/status/{id}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
    });

    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, "index"])->name('users.index');
        Route::get('/{id}/status', [UserController::class, "changeStatus"])->name('user.status');
    });

    // Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingController::class, "index"])->name('settings.index');
        Route::post('/categories/store', [CategoryController::class, "store"])->name('category.store');
        Route::delete('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy'); // Added delete route
        Route::post('/brands/{category}/store', [BrandController::class, 'store'])->name('brand.store');
    });
});
