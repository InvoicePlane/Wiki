<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function() {
    $default_locale = Config::get('app.locale');
    $default_version = Config::get('app.version');
    return Redirect::to('/'.$default_locale.'/'.IP::urlVersion($default_version));
}]);

Route::get('{locale}/{version}/{dir?}/{page?}', 'WikiController@getPage')
    ->where('version', '[0-9\.]+');
