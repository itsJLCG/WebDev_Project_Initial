<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/scheduling', function () {
        return view ('scheduling');
    })->name('scheduling');

    
    Route::get('/massschedule', function () {
        return view ('massschedule');
    })->name('massschedule');
    
    Route::get('/prayers', function () {
        return "This is the prayers page.";
    })->name('prayers');
    
    Route::get('/resources', function () {
        return "This is the resources page.";
    })->name('resources');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::post('/schedule', [AuthManager::class, 'schedule'])->name('schedule.store');

