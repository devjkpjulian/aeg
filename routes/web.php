<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resources([
        'users' => 'App\Http\Controllers\UserController',
        'departments' => 'App\Http\Controllers\DepartmentController',
        'sge_types' => 'App\Http\Controllers\SGETypesController',
        'sge_classes' => 'App\Http\Controllers\SGEClassController',
        'students' => 'App\Http\Controllers\StudentController',
        'programs' => 'App\Http\Controllers\CourseController',
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
