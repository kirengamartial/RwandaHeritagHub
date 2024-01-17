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
Route::get('/lessons/lesson', [LessonController::class, 'showLesson'])->middleware('auth')->name('lessons.lesson');
Route::get('/lessons/{id}/edit', [LessonController::class, 'edit'])->middleware('auth')->name('lessons.edit');
Route::delete('/lessons/{id}', [LessonController::class, 'destroy'])->middleware('auth')->name('lessons.destroy');
Route::put('/lessons/{id}', [LessonController::class, 'update'])->middleware('auth')->name('lessons.update');
Route::get('/lessons/{id}', [LessonController::class, 'show'])->middleware('auth')->name('lessons.show');

Auth::routes();

Route::get('/home', [LessonController::class, 'index'])->name('home');
