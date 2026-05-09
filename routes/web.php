<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;

Route::post('/auth', [SiteController::class, 'auth']);

Route::resource('products', ProductController::class);

Route::get('/login', function () {

    if (Auth::check())
        return redirect('/products');

    return view('login');

})->name('login');

Route::get('/logout', function () {

    Auth::logout();

    return redirect('/login');
});

Route::resource('products', ProductController::class)
    ->middleware('auth');