<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('admin', function () {
    return view('pages.admin');
});
Route::get('signup', function () {
    return view('pages.signup');
});
Route::get('signin', function () {
    return view('pages.signin');
});
Route::get('mypages', function () {
    return view('pages.index_loggedin');
});
Route::get('profile', function () {
    return view('pages.profile');
});
Route::get('reports', function () {
    return view('pages.report');
});
Route::get('/hello-world/{year}/{yourname?}', function($year, $yourname = null){
    $hello_string = '';
    if($yourname == null){
        $hello_string = 'Hello world, ' . $year;
    }else{
        $hello_string = 'Hello world, ' . $year . '. My name is ' . $yourname;
    }
    return view('pages.hello-world')->with('hello_str', $hello_string);
});
