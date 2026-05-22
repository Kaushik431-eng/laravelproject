<?php

use App\Http\Controllers\All_ProductsController;
use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\EbooksController;
use App\Http\Controllers\FeaturedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('ebook',[EbooksController::class,'index'])->name('frontend.index');
route::get('aboute',[EbooksController::class,'aboute'])->name('frontend.aboute');
route::get('contact',[EbooksController::class,'contact'])->name('frontend.contact');
route::get('shopall',[EbooksController::class,'shop_all'])->name('frontend.shop_all');
route::get('artdesign',[EbooksController::class,'Art_Design'])->name('fronend.Art_Design');
route::get('fiction',[EbooksController::class,'fiction'])->name('fronend.fiction');
route::get('no_fiction',[EbooksController::class,'no_fiction'])->name('fronend.no_fiction');


// crude code

// product crud
Route::get('books',[bookcontroller::class,'index'])->name('books.index');
Route::get('books/create',[bookcontroller::class,'create'])->name('books.create');
Route::post('books/create',[bookcontroller::class,'store'])->name('books.store');
Route::get('books/edit/{id}',[bookcontroller::class,'edit'])->name('books.edit');
Route::put('books/update/{id}',[bookcontroller::class,'update'])->name('books.update');
Route::get('books/delete/{id}',[bookcontroller::class,'destroy'])->name('books.delete');

// All Product Crud

Route::get('All_Products',[All_ProductsController::class,'index'])->name('All_Products.index');
Route::get('All_Products/create',[All_ProductsController::class,'create'])->name('All_Products.create');
Route::post('All_Products/create',[All_ProductsController::class,'store'])->name('All_Products.store');
Route::get('All_Products/edit/{id}',[All_ProductsController::class,'edit'])->name('All_Products.edit');
Route::put('All_Products/update/{id}',[All_ProductsController::class,'update'])->name('All_Products.update');
Route::get('All_Products/delete/{id}',[All_ProductsController::class,'destroy'])->name('All_Products.delete');

// Featured

Route::get('Featured',[FeaturedController::class,'index'])->name('Featured.index');
Route::get('Featured/create',[FeaturedController::class,'create'])->name('Featured.create');
Route::post('Featured/create',[FeaturedController::class,'store'])->name('Featured.store');
Route::get('Featured/edit/{id}',[FeaturedController::class,'edit'])->name('Featured.edit');
Route::put('Featured/update/{id}',[FeaturedController::class,'update'])->name('Featured.update');
Route::get('Featured/delete/{id}',[FeaturedController::class,'destroy'])->name('Featured.delete');






