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
    return view('welcome');
});
 

Route::get('/login',  'AuthController@loginForm')->name('login');
Route::post('/login',  'AuthController@login');

Route::get('/logout',  'AuthController@logout');


Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');


Route::get('/register',  'RegisterController@create');
Route::post('/register',  'RegisterController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employee','EmployeeController@index');
Route::post('/addimage', 'EmployeeController@save')->name ('addimage');
Route::get('/employeeform','EmployeeController@display');
Route::get('/editimage/{id}','EmployeeController@edit');
Route::put('/updateemployee/{id}','EmployeeController@update');







