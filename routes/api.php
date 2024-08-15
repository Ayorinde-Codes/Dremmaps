<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard/users-count', [DashboardController::class, 'getUsersCount']);
    Route::get('/dashboard/categories-count', [DashboardController::class, 'getCategoriesCount']);
    Route::get('/dashboard/skills-count', [DashboardController::class, 'getSkillsCount']);
    Route::get('/dashboard/skill-levels-count', [DashboardController::class, 'getSkillLevelsCount']);
    Route::get('/dashboard/user-skills-count', [DashboardController::class, 'getUserSkillsCount']);
});