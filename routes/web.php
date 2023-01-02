<?php

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

Route::get('/', function () {
    return view('web.homepage');
});
Route::get('/tour/kintamani-tour', function () {
    return view('web.tour.show');
});
Route::get('/test', function () {
    $destinations = Destination::where('package_id', 4)->get();
});
