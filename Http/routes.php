<?php

Route::group(['middleware' => 'web', 'prefix' => \Helper::getSubdirectory(), 'namespace' => 'Modules\Themes\Http\Controllers'], function()
{
    Route::get('/', 'ThemesController@index');
});
