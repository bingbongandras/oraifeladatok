<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $username = "János";
    return view('welcome',[
        'name' => $username
    ]);
});

Route::get('/pass-array', function(){
    $tasks = [
        'Menj a boltba',
        'Menj a piacra',
        'Menj dolgozni'
    ];

    $foobar = 'foobar';

    /*return view('pass-array',[
        'tasks' => $tasks
    ]);*/

    //return view('tasklist')->withTasks($tasks)->withFoo($foobar);

    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);
});

Route::get('/request-test', function () {
    return view('request-inputs', [
    'title' => request('title'),
    ]);
});