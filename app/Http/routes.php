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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['web']], function(){

  Route::get('/', function () {
    return view('reminder');
  });



  Route::get('/reminder/{id}', function ($id) {
    $reminder = App\Reminder::find($id);
    echo $reminder->content;
  });

  Route::post('/', 'ReminderController@setReminder');

});
