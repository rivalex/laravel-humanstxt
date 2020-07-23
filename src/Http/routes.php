<?php

    Route::get('humans.txt', [
        'as' => 'humans.txt',
        'uses' => 'Rivalex\Humans\Http\Controllers\HumansController@humans'
    ]);
