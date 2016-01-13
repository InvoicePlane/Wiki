<?php

Route::get('/', [
    'as' => 'home',
    function () {
        $default_locale = Config::get('app.locale');
        $default_version = Config::get('app.version');
        return Redirect::to('/' . $default_locale . '/' . \App\IP::urlVersion($default_version));
    }
]);

Route::get('{locale}/{version?}/{dir?}/{page?}', 'WikiController@getPage')
    ->where('version', '[0-9\.]+');
