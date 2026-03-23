<?php

use App\Http\Controllers\Admin\AssetUploadController;
use App\Http\Controllers\Admin\FeedController as AdminFeedController;
use App\Http\Controllers\Admin\ManifestoController as AdminManifestoController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ScheduleController as AdminScheduleController;
use App\Http\Controllers\Admin\SubmissionController as AdminSubmissionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Public\CandidateController;
use App\Http\Controllers\Public\DesignAssetController;
use App\Http\Controllers\Public\FeedController;
use App\Http\Controllers\Public\ManifestoController;
use App\Http\Controllers\Public\PosterTemplateController;
use App\Http\Controllers\Public\ScheduleController;
use App\Http\Controllers\Public\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (): void {
    Route::prefix('auth')->group(function (): void {
        Route::post('login', LoginController::class);
    });

    Route::prefix('public')->group(function (): void {
        Route::get('mandalam/{mandalam}/candidate', [CandidateController::class, 'showByMandalam']);
        Route::get('candidates/{candidate}/feeds', [FeedController::class, 'index']);
        Route::get('candidates/{candidate}/manifesto', [ManifestoController::class, 'index']);
        Route::post('candidates/{candidate}/submissions', [SubmissionController::class, 'store']);
        Route::get('candidates/{candidate}/design-assets', [DesignAssetController::class, 'show']);
        Route::get('assets/poster-templates', [PosterTemplateController::class, 'index']);
        Route::get('candidates/{candidate}/schedule', [ScheduleController::class, 'index']);
    });

    Route::middleware('auth:api')->prefix('admin')->group(function (): void {
        Route::put('profile', [ProfileController::class, 'update']);
        Route::post('feeds', [AdminFeedController::class, 'store']);
        Route::post('manifesto', [AdminManifestoController::class, 'store']);
        Route::get('submissions', [AdminSubmissionController::class, 'index']);
        Route::post('posters/generate', [PosterController::class, 'store']);
        Route::post('assets/upload', [AssetUploadController::class, 'store']);
        Route::post('schedule', [AdminScheduleController::class, 'store']);
        Route::delete('schedule/{event}', [AdminScheduleController::class, 'destroy']);
    });
});
