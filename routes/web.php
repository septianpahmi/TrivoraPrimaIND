<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $launchTime = CarbonImmutable::parse(
        '2026-10-02 22:15:00',
        'Asia/Jakarta'
    );

    if (now('Asia/Jakarta')->lt($launchTime)) {
        return response()
            ->view('countdown')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    return app(HomeController::class)->index();
})->name('home');

Route::redirect('/home', '/', 301);

Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml');
});

//product
Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product/{product:slug}', [ProductController::class, 'detail'])->name('product.detail');

Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:3,10')
    ->name('contact.send');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/terms-conditions', 'terms-conditions')->name('terms-conditions');
