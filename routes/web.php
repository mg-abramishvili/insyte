<?php

use Illuminate\Support\Facades\Route;
use App\Models\Feature;
use App\Models\Portfolio;

Route::get('/', function () {
    $features = Feature::all();
    $portfolios = Portfolio::all();
    return view('home', compact('features', 'portfolios'));
});

Route::get('policy', function () {
    return view('policy');
});

Route::post('_leads', [App\Http\Controllers\LeadController::class, 'store']);

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
