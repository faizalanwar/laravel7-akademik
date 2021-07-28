<?php

use App\Http\Controllers\StudentsController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'acaicaic anw';
//     return view('about', ['nama' => $nama]);
// });


// Students
// Route::get('/students','StudentsController@index');
// Route::get('/students/create','StudentsController@create');
// Route::get('/students/{student}','StudentsController@show');
// Route::post('/students','StudentsController@store');
// Route::delete('/students/{student}','StudentsController@destroy');
// Route::get('/students/{student}/{edit}','StudentsController@edit');
// Route::patch('/students/{student}','StudentsController@update');

Route::get('/','PagesController@home');
Route::get('/index','PagesController@home');
Route::get('/forbidden', function () {
    return view('forbidden');
});
// Route::get('/login','AuthController@login');
Route::get('/index','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/students/cari','StudentsController@cari');
Route::get('/students/exportExcel','StudentsController@exportExcell');

Route::get('/dosen/exportExcel','DosenController@exportExcell');
Route::get('/students/exportCSV','StudentsController@exportCSV');
Route::get('/dosen/cari','DosenController@cari');
Route::resource('dosen','DosenController');
Route::resource('students','StudentsController');
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
