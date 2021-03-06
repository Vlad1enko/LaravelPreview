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

Route::get('/', 'HomeController@index');
Route::get('studentlist/{id}', 'StudentController@index');
Route::get('subjectlist/{id}', 'SubjectController@index');

// Route::get('hi/{id}', 'HomeController@sayHi');

// Route::post('/create', 'MessageController@create');

// Route::get('/about/{param?}', function () {
//     return view('welcome');
// });

// Route::get('/page', function () {
//     return view('welcome');
// });
