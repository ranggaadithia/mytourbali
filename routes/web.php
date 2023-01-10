<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageDashboard;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Photos;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('photo', PhotoController::class)->only('destroy');
    Route::resource('/package', PackageDashboard::class);
    Route::get('package/destination/{package:id}', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('package/destination/{package:id}/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::resource('package/destination', DestinationController::class)->except('index', 'create');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
