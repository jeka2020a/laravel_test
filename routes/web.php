<?php


Route::get('/' , 'FormController@form_contr');

Route::get('/home','FormController@get_info');

Route::get('/welcome', 'FormController@get_dbinfo');


Route::get('/gg', function () {
    return view('gg');
});

