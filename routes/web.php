<?php

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

// Route::get('/hello', function () {
//     return view('hello',[
//         'name'=>'Balraj'
//     ]);
// });

// Route::get('/hello', function () {
//     $name ='Balraj';
//     return view('hello',compact('name'));
// });


Route::post('/result', 'Arithmatic@values');

Route::get('/calculator', function () {
    return view('calculator');
});

