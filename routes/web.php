<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

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

Route::name('group.')->group(function () {
    Route::get('/group', [GroupController::class,'index'])->name('index');
    Route::get('/group/create', [GroupController::class, 'create'])->name('create');
    Route::post('/group', [GroupController::class, 'store'])->name('store');
    Route::get('/group/{id}', [GroupController::class, 'show'])->name('show');
    Route::get('/group/{id}/edit', [GroupController::class, 'edit'])->name('edit');
    Route::put('/group/{id}', [GroupController::class, 'update'])->name('update');
    Route::delete('/group/{id}', [GroupController::class, 'delete'])->name('delete');
});
