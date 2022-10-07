<?php

use App\Http\Controllers\AcademicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;


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


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// Route::resource('user', UserController::class);
Route::controller(UserController::class)->group(function(){
    Route::middleware('auth')->group(function () {
        Route::get('user', 'index');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('delete/{id}', 'destroy')->name('destroy');
        Route::post('user', [AcademicController::class,'store'])->name('store');
Route::get('academic-form', [AcademicController::class,'create'])->name('academic_form');
Route::get('/sendemail',[AcademicController::class, 'sendEmail'])->name('sendEmail');
// Route::get('/send-mail-queue',[UserController::class, 'sendEmailQueue'])->name('sendEmailQueue');
Route::post('/sent-email',[UserController::class, 'sentEmail'])->name('sentEmail');

    });    
});
Route::get('/email/verify', function () {
    return view('auth.verify-email');   
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home'); 
})->middleware(['auth', 'signed'])->name('verification.verify');

// Route::get('send-email')
Route::view('/jquery','jquery');
Route::view('/test','test')->name('ajax');
