<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\OAuthController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//OAuth providers
Route::get('register/oauth', [RegisteredUserController::class, 'registerWithProvider'])
    ->middleware('guest')
    ->name('register.oauth');

Route::get('/oauth/{provider}', [OAuthController::class, 'redirect'])
    ->where('provider', 'facebook|twitter|linkedin|google|github|gitlab|bitbucket')
    ->middleware('guest')
    ->name('oauth.redirect');

Route::get('/oauth/{provider}/callback', [OAuthController::class, 'callback'])
    ->where('provider', 'facebook|twitter|linkedin|google|github|gitlab|bitbucket')
    ->middleware('guest')
    ->name('oauth.callback');

require __DIR__.'/auth.php';
