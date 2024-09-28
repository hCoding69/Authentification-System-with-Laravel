<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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
Route::get('/show', [CrudController::class, 'show'])->name("show");
Route::get('/create', [CrudController::class, "create"])->name("create");
Route::post('/store', [CrudController::class, "store"])->name("store");
Route::get('/{clientId}/edit', [CrudController::class, "edit"])->name("crud.edit");
Route::put('/{clientId}/update', [CrudController::class, "update"])->name("crud.update");

