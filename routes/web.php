<?php

use Illuminate\Support\Facades\Route;
use App\Models\Feature;

Route::get('/', function () {
    $features = Feature::all();
    return view('home', compact('features'));
});

// ADMIN
Route::get('admin', function () {
    return view('layouts.admin');
})->middleware(['auth']);

Route::prefix("admin")->middleware(['auth'])->group(function() {
    Route::get('{any}', function () {
        return view('layouts.admin');
    })->where('any', '.*');
});

require __DIR__.'/auth.php';
