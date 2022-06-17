<?php

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('courses', function () {
    $courses = Course::all();
    return response($courses);
});


Route::get('course/{id}/students', function ($id) {
    return response([]);
    $users = Student::whereHas('courses', function ($q) use ($id) {
        $q->where('course_id', $id);
    })->with('user')->get();
    return response($users);
});
