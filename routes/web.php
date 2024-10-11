<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

Route::get('/home', function() {
    return view('landing.home');
});

Route::get('/', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Orders Routes
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/processing', [OrderController::class, 'processing'])->name('orders.processing');
    Route::get('/orders/notifications', [OrderController::class, 'notifications'])->name('orders.notifications');
    Route::get('/orders/status-update', [OrderController::class, 'statusUpdate'])->name('orders.status-update');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

    // Products Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/product-catalog', [ProductController::class,'productCatalog'])->name('products.product-catalog');
    Route::get('/products/stock', [ProductController::class, 'stock'])->name('products.stock');
    Route::get('/products/inventory-materials', [ProductController::class, 'inventoryMaterials'])->name('products.inventory-materials');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    
    // Customers Routes
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::patch('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::get('/customers/profiles', [CustomerController::class, 'profiles'])->name('customers.profiles');
    Route::get('/customers/order-history', [CustomerController::class, 'orderHistory'])->name('customers.order-history');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class,'store']);
// Route::delete('/products{product}', [ProductController::class, 'destroy']);

Route::resource('users', UserController::class);


Route::resource('products', ProductController::class);
require __DIR__.'/auth.php';

