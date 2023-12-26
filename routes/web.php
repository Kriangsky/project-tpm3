<?php

use App\Http\Controllers\MallsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/choose-mall', [MallsController::class, 'chooseMall']);
Route::post('/mall-chosen', [MallsController::class, 'mallChosen']);
Route::get('/read-mall', [MallsController::class, 'readMall']);
Route::get('/edit-mall/{id}', [MallsController::class, 'editMalls']);
Route::patch('/update-mall/{id}', [MallsController::class, 'updateMall']);
Route::delete('/delete-mall/{id}', [MallsController::class, 'deleteMall']);

Route::get('/create-category', [CategoryController::class, 'createCategory']);
Route::post('/create-category1', [CategoryController::class, 'createCategory1']);


















