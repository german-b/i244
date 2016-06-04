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
    return view('main');
  });

  Route::get('/tinker', ['as' => 'tinker', function () {
    return view('tinker');
  }]);

  Route::get('/test', ['as' => 'test', function () {
    return view('test');
  }]);

  Route::get('/reminder/{rand}', function ($rand) {
    $reminder = App\Reminder::where('rand', $rand)->first();
    echo "Content: " . $reminder->content . "<br />";
    echo "Author: " . $reminder->author;
  });

  Route::post('/', 'ReminderController@setReminder');

});
