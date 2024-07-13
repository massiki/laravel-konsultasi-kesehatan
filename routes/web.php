<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('home');
})->middleware('verified');

Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/questions/create', [QuestionController::class, 'create'])->middleware(['verified', 'auth']);
Route::post('/questions', [QuestionController::class, 'store'])->middleware(['verified', 'auth']);
Route::get('/questions/{question}', [QuestionController::class, 'show']);

Route::get('/answer/{question}/create', [AnswerController::class, 'create'])->middleware(['verified', 'auth']);
Route::post('/answer', [AnswerController::class, 'store'])->middleware(['verified', 'auth']);

Route::get('/tag/{question}', [TagController::class, 'show']);