<?php
use App\Http\Controllers\TutorialController;
// namespace App\Http\Controllers\Api;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('journals.index');
});

Route::get('/create', function () {
    return view('journals.create');
});

Route::get('/edit', function () {
    return view('journals.edit');
});

use App\Http\Controllers\JournalController;

Route::get('journals/show', [JournalController::class, 'showjournals'])->name('showjournals');
Route::get('journals/create', [JournalController::class, 'createjournals'])->name('createjournals');
Route::post('journals/save', [JournalController::class, 'savejournals'])->name('savejournals');

Route::get('journals/edit/{id}', [JournalController::class, 'editjournals'])->name('editjournals');
Route::post('journals/update', [JournalController::class, 'updatejournals'])->name('updatejournals');
Route::get('journals/delete/{id}', [JournalController::class, 'deletejournals'])->name('deletejournals');


use App\Http\Controllers\LoginController;
Route::get('/login', function () {
    return view('login');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');