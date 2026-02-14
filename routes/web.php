<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products / Catalog
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produk/kategori/{slug}', [ProductController::class, 'category'])->name('products.category');



// Galleries
Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galeri/{slug}', [GalleryController::class, 'show'])->name('galleries.show');

// Articles / Blog
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Static Pages
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
