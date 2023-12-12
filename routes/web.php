<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PaymentController;
use App\Models\lesson;


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

// routes/web.php

Route::get('/lessons/create', [LessonController::class, 'create'])->middleware('auth')->name('lessons.create');
Route::post('/lessons/store', [LessonController::class, 'store'])->middleware('auth')->name('lessons.store');
Route::get('/lessons/{id}', [LessonController::class, 'show'])->middleware('auth')->name('lessons.show');
Route::post('/payments/make/{lessonId}', [PaymentController::class, 'pay'])->middleware('auth')->name('payments.handle');
Route::get('/success', [PaymentController::class, 'success'])->middleware('auth');
Route::get('/error', [PaymentController::class, 'error'])->middleware('auth');

Auth::routes();

Route::get('/home', [PaymentController::class, 'index'])->middleware('auth')->name('home');
