<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;

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
    return view('welcome');
});



// Route::controller(LivreController::class)->group(function () {

//     Route::get('/livre', 'index')->name('livre.index');
//     Route::get('/livre/create', 'create')->name('livre.create');
//     Route::get('/livre/{id}', 'show')->name('livre.show');
//     Route::get('/livre/{id}/edit', 'edit')->name('livre.edit');


//     Route::post('/livre', 'store');
//     Route::patch('/livre/{id}', 'update');
//     Route::delete('/livre/{id}', 'destroy');

// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
