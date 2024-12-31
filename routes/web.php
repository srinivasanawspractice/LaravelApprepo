<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('upload', [ImageUploadController::class, 'index'])->name('upload.form');
Route::post('upload', [ImageUploadController::class, 'upload'])->name('upload.image');
Route::get('/health-check', function () {
    return response()->json(['status' => 'ok'], 200);
});

