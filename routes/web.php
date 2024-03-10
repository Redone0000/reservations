<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Gate;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RepresentationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('artist', [ArtistController::class, 'index'])
    ->name('artist.index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
    ->where('id', '[0-9]+')->name('artist.show');
Route::get('artist/create', [ArtistController::class, 'create'])
    ->name('artist.create');
Route::post('/artist', [ArtistController::class, 'store'])
    ->name('artist.store');
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])
	->where('id', '[0-9]+')->name('artist.edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])
	->where('id', '[0-9]+')->name('artist.update');
Route::delete('/artist/{id}', [ArtistController::class, 'destroy'])
	->where('id', '[0-9]+')->name('artist.delete');



Route::get('/type', [TypeController::class, 'index'])
    ->name('type.index');
Route::get('/type/{id}', [TypeController::class, 'show'])
	->where('id', '[0-9]+')->name('type.show');
Route::get('/type/edit/{id}', [TypeController::class, 'edit'])
	->where('id', '[0-9]+')->name('type.edit');
Route::put('/type/{id}', [TypeController::class, 'update'])
	->where('id', '[0-9]+')->name('type.update');




Route::get('/locality', [LocalityController::class, 'index'])
    ->name('locality.index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])
    ->where('id', '[0-9]+')->name('locality.show');
Route::get('/locality/edit/{id}', [LocalityController::class, 'edit'])
	->where('id', '[0-9]+')->name('locality.edit');
Route::put('/locality/{id}', [LocalityController::class, 'update'])
	->where('id', '[0-9]+')->name('locality.update');

Route::get('/role', [RoleController::class, 'index'])
    ->name('role.index');
Route::get('/role/{id}', [RoleController::class, 'show'])
    ->where('id', '[0-9]+')->name('role.show');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])
	->where('id', '[0-9]+')->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])
	->where('id', '[0-9]+')->name('role.update');
    
    

Route::get('location', [LocationController::class, 'index'])
    ->name('location_index');
Route::get('location/{id}', [LocationController::class, 'show'])
    ->where('id', '[0-9]+')->name('location_show');
    

Route::get('/show', [ShowController::class, 'index'])
    ->name('show.index');
Route::get('/show/{id}', [ShowController::class, 'show'])
    ->where('id', '[0-9]+')->name('show.show');

Route::get('/representation', [RepresentationController::class, 'index'])
->name('representation.index');
Route::get('/representation/{id}', [RepresentationController::class, 'show'])
->where('id', '[0-9]+')->name('representation.show');
    



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
