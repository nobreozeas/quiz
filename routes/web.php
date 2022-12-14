<?php

use App\Http\Controllers\QuizController;
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
Route::get('/', function(){
    return view('inicio');
})->name('inicio');
Route::get('/quiz', [QuizController::class, 'create'])->name('quiz');
Route::post('/quiz/novo', [QuizController::class, 'store'])->name('adiciona_quiz');
Route::post('/sucesso/contato', [QuizController::class, 'contato'])->name('contato');
Route::get('/show', [QuizController::class, 'show'])->name('mostra_quiz');

