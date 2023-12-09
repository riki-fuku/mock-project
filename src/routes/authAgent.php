<?php

// 一般ユーザー用
use App\Http\Controllers\Auth\Agent\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Agent\ConfirmablePasswordController;
use App\Http\Controllers\Auth\Agent\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\Agent\EmailVerificationPromptController;
use App\Http\Controllers\Auth\Agent\NewPasswordController;
use App\Http\Controllers\Auth\Agent\PasswordResetLinkController;
use App\Http\Controllers\Auth\Agent\RegisteredUserController;
use App\Http\Controllers\Auth\Agent\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/agent'], function () {
    // Route::middleware('agent_auth')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('agent.login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('agent.login_store');
    // });

    Route::middleware('agent_guest')->group(function () {
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('agent.logout');
    });
});
