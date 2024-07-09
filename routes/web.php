<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SkillSelectionController;
use App\Http\Controllers\AdditionalDetailsController;
use App\Http\Controllers\SkillPickedController;
use App\Http\Middleware\AdditionalDetailsCompletedMiddleware;
use App\Http\Middleware\SelectSkillsCompletedMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(
        [
            'auth',
            'verified',
            AdditionalDetailsCompletedMiddleware::class,
            SelectSkillsCompletedMiddleware::class
        ]
    )->name('dashboard');

// Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/onboarding/user-welcome', [WelcomeController::class, 'showWelcomePage'])->name('onboarding.user-welcome');
Route::get('/onboarding/skill-picked', [SkillPickedController::class, 'showSkillPickedPage'])->name('onboarding.skill-picked');
Route::get('/onboarding/select-skills', [SkillSelectionController::class, 'showSkillSelectionPage'])->name('onboarding.select-skills');
Route::post('/onboarding/add-user-skills', [SkillSelectionController::class, 'addUserSkills'])->name('onboarding.add-user-skills');
Route::get('/onboarding/additional-details', [AdditionalDetailsController::class, 'showAdditionalDetailsPage'])->name('onboarding.additional-details');
Route::post('/onboarding/save-additional-details', [AdditionalDetailsController::class, 'saveAdditionalDetails'])->name('onboarding.save-additional-details');
// });
// Route::get('/onboarding/user-welcome', [WelcomeController::class, 'showWelcomePage'])->name('onboarding.user-welcome');

require __DIR__ . '/auth.php';
