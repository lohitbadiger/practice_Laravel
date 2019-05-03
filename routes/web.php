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
    return view('welcome');
});

Route::get('jupitar', function()
{
return view('jupitar');

});














Route::get('first', function () {
    return view('first');
});

Route::view('/view', 'view');




Route::any('any', function () {
    return view('any');
});








// returning route with id
Route::get('open_by/{id}',function($id){
    return "This is Id number=>".   $id;
});





// Redirect to some other route
Route::Redirect('any','first');



// Now im created new controller and using method called show

Route::get('show', 'Tutorial@show');

Route::get('jpi/{id}','test@test');


Route:: get('test/{id}', 'test@test');

Route::get('simple',function(){
 return view('simple',['name'=>'Naoya']);
});

Route::get('simple2/{name}', function($name2){
    return view('simple2', ['im_writting_this'=>$name2]);
});

Route::get('last','test@last');


// in browser type=> http://127.0.0.1:8000/request/?name='lohit'

// Route::get('request1/', 'test@request1');


// in browser type=> http://127.0.0.1:8000/requests/10/?name='lohit'
// 
Route::get('request2/{id}', 'test@request2');

Route::get('request3/{id}', 'test@request3');

Route::get('/open', 'TestController@show1');
Route::POST('submit', 'TestController@save');

Route::get('/bs','TestController@bs');


