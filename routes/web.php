<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = \Illuminate\Support\Facades\Cache::remember('test', now()->addMinutes(5), function () {
        return 'hello world';
    });

    $post_id = 55;

//    \Illuminate\Support\Facades\Cache::put('test',5,60);
//
//    $closure = \Illuminate\Support\Facades\Cache::get('test',function ($e) use($post_id) {
//        return $e + $post_id;
//    });

//    $test = \Illuminate\Support\Facades\Cache::put('num',123);
//
//    dd($test);

//    $data = (int)\Illuminate\Support\Facades\Cache::remember('num',\Carbon\Carbon::now()->addMinutes(10),function () {
//        return 0;
//    });
//    $incr = \Illuminate\Support\Facades\Cache::increment('num');
//



    $incr = \Illuminate\Support\Facades\Cache::increment('number');





    return view('welcome');
});
