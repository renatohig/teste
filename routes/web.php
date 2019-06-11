<?php

Route::get('/categoria/{idCategoria?}', 'SiteController@categoria');
Route::get('/', 'SiteController@index');
Route::get('/contato', 'SiteController@contato');
