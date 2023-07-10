<?php
use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers\Api;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\HomeController;

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


Route::get('/edit', function () {
    return view('journals.edit');
});

use App\Http\Controllers\LoginController;

Route::middleware('isLogin')->group(function () {
//    
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
});
Route::middleware('notLogin')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('journals/show', [JournalController::class, 'showjournals'])->name('showjournals');
Route::get('journals/create', [JournalController::class, 'create'])->name('createjournals');
Route::post('journals', [JournalController::class, 'store'])->name('storejournals');
Route::post('journals/save', [JournalController::class, 'savejournals'])->name('savejournals');
Route::get('journals/edit/{id}', [JournalController::class, 'editjournals'])->name('editjournals');
Route::post('journals/update', [JournalController::class, 'updatejournals'])->name('updatejournals');
Route::get('journals/delete/{id}', [JournalController::class, 'deletejournals'])->name('deletejournals');
});




Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');