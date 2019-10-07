<?php

use Illuminate\Http\Response;

Route::post('deploy/pull', function (){
    exec('git pull');
    return response()->json('success', Response::HTTP_OK);
})->name('deploy.pull');



