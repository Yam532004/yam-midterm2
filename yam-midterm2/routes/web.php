<?php
// use App\Http\Controllers\About_UsController;
use Illuminate\Support\Facades\Route;

Route::get('/about_us', function () {
    return view('Webpage.about_us');
});
// Route::get('/Furni', [About_UsController::class, 'index']);
