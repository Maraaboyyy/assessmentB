<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


use App\Http\Controllers\LoyaltyController;

Route::get('/page1', [LoyaltyController::class, 'showPage1']);
Route::post('/page2', [LoyaltyController::class, 'processPage1']);
Route::get('/page2', [LoyaltyController::class, 'showPage2'])->name('page2');
Route::post('/page3', [LoyaltyController::class, 'processPage2']);
Route::get('/page3', [LoyaltyController::class, 'showPage3'])->name('page3');

