<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MicahController;

Route::get('/', [MicahController::class, 'index']);
Route::get('/chapter/{chapter_number}', [MicahController::class, "readByChapter"]);
Route::get('/all-chapters', [MicahController::class, 'readAllChapters']);