<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\StudentController;
use App\Mail\StudentRegister;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

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

Route::get('email', function () {
    $user = User::find(1);
    return Mail::to($user)->queue(new StudentRegister($user));
});



Route::get('/', [WebController::class, 'index']);
Route::get('/register/{slug?}', [WebController::class, 'getRegister']);
Route::post('/register', [WebController::class, 'register']);

Route::get('/courses', [WebController::class, 'courses']);
Route::get('/about-us', [WebController::class, 'aboutUs']);
Route::get('/contact-us', [WebController::class, 'contactUs']);
// Route::get('/', [WebController::class, 'index']);
Route::resource('students', StudentController::class);
Route::view('registration.success', 'students.success');
