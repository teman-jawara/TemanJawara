<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\InterestController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');



Route::middleware('auth')->group(function () {

    Route::get('/homepage', function () {
        return view('homepage');
    })->name('homepage');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::post('/profile/update', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::post('/achievement/store', [AchievementController::class, 'store'])
        ->name('achievement.store');

    Route::post('/interest/store', [InterestController::class, 'store'])
        ->name('interest.store');

    Route::get('/partner', function () {
    return view('partner');
    })->name('partner');

    Route::get('/postpage', function () {
    return view('postpage');
    })->name('postpage');

    Route::get('/message', function () {
    return view('message');
}   )->name('message');
});

require __DIR__.'/auth.php';