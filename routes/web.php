<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsGradingController;

Route::get('/', [StudentsGradingController::class, 'begin']);
Route::post('enter-grades', [StudentsGradingController::class, 'enterGrades']);
Route::post('compute-grades', [StudentsGradingController::class, 'computeGrades']);