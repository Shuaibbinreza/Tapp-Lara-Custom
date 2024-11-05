<?php

use App\Http\Controllers\UserProfile;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::fallback(function () {
    return response()->view('errors.vetor', [], 404);
});

//Update User Details
// Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::post('/form-submit', [UserProfile::class, 'submitForm'])->name('form.submit');
Route::post('/user-experience', [UserProfile::class, 'experienceForm'])->name('user-experience.store');
Route::post('/user/avatar/update', [UserProfile::class, 'updateAvatar'])->name('user.avatar.update');
// Route::get('/pages-profile-settings', [UserProfile::class, 'index'])->name('personalDetails');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify', function () {
	if(auth()->user()->hasVerifiedEmail()) {
		return redirect('/');
	}
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


