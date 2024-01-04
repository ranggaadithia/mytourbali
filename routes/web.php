<?php

use App\Models\Photos;
use App\Models\Review;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PackageDashboard;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DestinationController;

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


Route::domain('links.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return redirect('https://msha.ke/mytourbali');
    });
});

Route::resource('/', PackageController::class);
Route::get('/tour/{package:slug}', [PackageController::class, 'show']);
Route::get('/destination/{package:id}', [PackageController::class, 'show']);
Route::get('/airport', function () {
    return view('web.airport', [
        'title' => 'Airport'
    ]);
});
Route::get('/top-destinations', function () {
    return view('web.top-destination', [
        'title' => 'THE TOP 10 Full Day Tours | My Tour Bali',
        'packages' => Package::where('category_id', 1)->get()
    ]);
});

Route::get('/cars', function () {
    return view('web.cars', [
        'title' => 'Cars Charter Services'
    ]);
});
Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/activity/{package:slug}', [ActivityController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('photo', PhotoController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('/package', PackageDashboard::class);
    Route::get('package/destination/{package:id}', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('package/destination/{package:id}/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::resource('package/destination', DestinationController::class)->except('index', 'create');
    Route::resource('videos', VideoController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test', function () {
    return "test";
});

require __DIR__ . '/auth.php';
