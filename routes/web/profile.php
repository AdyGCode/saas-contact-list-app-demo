<?php
/**
 * Current User Logged in Profile
 *
 * SHOULD NOT BE USED BY ADMIN TO UPDATE OTHER USERS
 */

use App\Http\Controllers\Settings;
use App\Http\Controllers\UserAvatarController;

use Illuminate\Support\Facades\Route;

Route::get('avatars/{user}', [UserAvatarController::class, 'show'])->name('avatars.show');

Route::middleware(['auth'])->prefix('app')->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy')->middleware('throttle:password-settings');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update')->middleware('throttle:password-settings');
    Route::get('settings/two-factor', [Settings\TwoFactorAuthenticationController::class, 'edit'])->name('settings.two-factor.edit')->middleware('password.confirm');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');
});
