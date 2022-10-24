<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('attendance', 'AttendanceCrudController');
    Route::crud('congregation', 'CongregationCrudController');
    Route::crud('congregation-status', 'CongregationStatusCrudController');
    Route::crud('family-status', 'FamilyStatusCrudController');
    Route::crud('congregation-family', 'CongregationFamilyCrudController');
    Route::crud('family', 'FamilyCrudController');
}); // this should be the absolute last line of this file