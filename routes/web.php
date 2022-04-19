<?php

use App\Http\Controllers\AppsController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/app/{app}', [AppsController::class, 'show'])->name('apps.show');
Route::get('/app/edit/{app}', [AppsController::class, 'edit'])->name('apps.edit');
Route::get('/app/delete/{delete}', [AppsController::class, 'delete'])->name('apps.delete');

Route::get('/documentation/{app}', [DocumentationController::class, 'show'])->name('documentation.show');


// API
Route::post('/api/submit/documentation/{documentation}',[DocumentationController::class, 'store']);

