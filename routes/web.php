<?php

use App\Http\Controllers\PackageController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Models\Package;

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

Route::get('/', [PackageController::class, 'index']);

Route::get('/tour/{package:slug}', [PackageController::class, 'show']);

Route::get('/test/{id}', function ($id) {
    $destinations = Destination::where('package_id', $id)->get();
    return $destinations;
});
