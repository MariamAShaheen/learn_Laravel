<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller('tasks','TaskController') ;


/*
Route::get('/tasks','TaskController@getTasks') ;
Route::get('/tasks/{id}','TaskController@getTask') ;
 * 
 * Route::get('/dashboard', ['middleware'=> 'age' ,function () {
    return 'This is the Dashboard';
}]);

Route::get('/restricted', function () {
    return 'You Are Not Allowed';
});
 Route::get('/welcom/{id}', function ($id) {
    return view('welcome',array('id' => $id) );
});
 Route::any('/hello/{massage?}', function ($massage = null) {
    return 'hello  Miss '.$massage ;
})->where('massage','[A-Za-z]+');
 Route::match(['get','post'],'/hello', function () {
    return 'get or post';
});
Route::get('/hello', function () {
    return '<<<<<<<<';
});
Route::post('/hello', function () {
    return "hello -post";
});

Route::put('/hello', function () {
    return "hello -put";
});
Route::delete('/hello', function () {
    return "hello -delete";
}); */
