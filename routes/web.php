<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\AuthController;

Route::get('/admin/login', [AuthController::class, 'login']);

Route::post('/admin/login', [AuthController::class, 'authenticate']);

Route::get('/admin/logout', [AuthController::class, 'logout']);

Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);

Route::get('/recipes/filter', [RecipeController::class, 'filter']);

Route::resource('recipes', RecipeController::class);

Route::get('/', function () {
    return redirect('/recipes');
});

Route::get('/recipes', [RecipeController::class, 'index']);

Route::get('/recipes/create', [RecipeController::class, 'create']);

Route::post('/recipes', [RecipeController::class, 'store']);

Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit']);

Route::put('/recipes/{id}', [RecipeController::class, 'update']);

Route::delete('/recipes/{id}', [RecipeController::class, 'destroy']);

Route::get('/recipes/{id}', [RecipeController::class, 'show']);

