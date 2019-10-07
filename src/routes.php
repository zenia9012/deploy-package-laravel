<?php

use Illuminate\Http\Response;

Route::post(config('deploy.deploy.url'), function (){
    exec('git pull');
    return response()->json('', Response::HTTP_OK);
})->name('deploy.pull');



