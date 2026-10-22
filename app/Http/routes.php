<?php

use App\Http\Controllers\WikiController;

Route::get('/', [WikiController::class, 'getHome'])->name('home');

Route::get('{locale}/{version?}/{dir?}/{page?}', [WikiController::class, 'getPage'])
    ->where('version', '[0-9\.]+');

Route::get('/test', [WikiController::class, 'getTestPage']);
