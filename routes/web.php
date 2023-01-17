<?php

use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('statuses.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Route::get('/profile/{user}/{following}', FollowingController::class)->name('profile.following');
    Route::get('/profile/{user}/{following}', [FollowingController::class, 'index'])->name('following.index');
    Route::post('/profile/{user}', [FollowingController::class, 'store'])->name('following.store');

    // Route::get('/profile/{user}/following', [FollowingController::class, 'following'])->name('profile.following');
    // Route::get('/profile/{user}/follower', [FollowingController::class, 'follower'])->name('profile.follower');
    // Route::get('/profile/{user}', ProfileInformationController::class)->name('profile.info')->withoutMiddleware('auth');

});

Route::get('/profile/{user}', ProfileInformationController::class)->name('profile.info');

require __DIR__.'/auth.php';
