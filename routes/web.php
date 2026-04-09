<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
   $totalSkins = Product::count();
    $valorTotal = Product::sum(DB::raw('precio * stock'));
    $bajoStock = Product::where('stock', '<', 3)->count();

    return view('dashboard', compact('totalSkins', 'valorTotal', 'bajoStock'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () { return view('welcome'); });

// Tienda pública
Route::get('/tienda', [ProductController::class, 'index'])->name('products.index');

//  Rutas Publicas
Route::get('/', function (){ return view('welcome'); });
Route::get('/product', [ProductController::class, 'index'])
    ->name('product.index');
Route::get('/product/{product}', [ProductController::class, 'show'])
    ->name('products.show');

// Rutas privadas
Route::middleware('auth')->group(function () {

    // Esta línea registra automáticamente el POST para 'products'
    Route::resource('products', ProductController::class)->except(['index', 'show']);

    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');
    Route::get('/products', [ProductController::class, 'store'])
        ->name('products.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
