<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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
})->name('home');

Route::name('group.')->group(function () {
    Route::get('/groups', [GroupController::class,'index'])->name('index');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('create');
    Route::post('/groups', [GroupController::class, 'store'])->name('store');
    Route::get('/groups/{id}', [GroupController::class, 'show'])->name('show');
    Route::get('/groups/{id}/edit', [GroupController::class, 'edit'])->name('edit');
    Route::put('/groups/{id}', [GroupController::class, 'update'])->name('update');
    Route::delete('/groups/{id}', [GroupController::class, 'delete'])->name('delete');
});

Route::name('subject.')->group(function () {
    Route::get('/subjects', [SubjectController::class,'index'])->name('index');
    Route::get('/subjects/create', [SubjectController::class, 'create'])->name('create');
    Route::post('/subjects', [SubjectController::class, 'store'])->name('store');
    Route::get('/subjects/{id}', [SubjectController::class, 'show'])->name('show');
    Route::get('/subjects/{id}/edit', [SubjectController::class, 'edit'])->name('edit');
    Route::put('/subjects/{id}', [SubjectController::class, 'update'])->name('update');
    Route::delete('/subjects/{id}', [SubjectController::class, 'delete'])->name('delete');
});

Route::name('student.')->group(function () {
    Route::get('/students', [StudentController::class,'index'])->name('index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('create');
    Route::post('/students', [StudentController::class, 'store'])->name('store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('show');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/students/{id}', [StudentController::class, 'delete'])->name('delete');
});
