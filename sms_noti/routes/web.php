<?php

use Illuminate\Support\Facades\Route;

Route::get('/sms', function () {
    return view('sms');
});

Route::get('', function () {
    return view('home');
}); //Home

Route::post('sms', 'SmsController@sendSms');

// Route::get('react', function () {
//     return view('welcome');
// });

Route::get('search', 'OwnerController@index');

Route::get('/insert', function () {
    return view('licence_insert');
}); //Owner insert

Route::post('submit', 'OwnerController@store');  //Owner DB insert

// Route::get('/sample', function () {
//     $result = DB::select('select * from owners where id = ?', [2]);
//     return $result;
// });
