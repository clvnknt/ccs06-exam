<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsGradingController;

Route::get('/', [StudentsGradingController::class, 'firstForm']);
Route::get('/enter-grades', [StudentsGradingController::class, 'secondForm']);
Route::get('/compute-grades', [StudentsGradingController::class, 'resultsPage']);