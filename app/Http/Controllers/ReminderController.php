<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

use App\Http\Requests;
use \App\Reminder as Reminder;

class ReminderController extends Controller
{
    public function setReminder(Request $request){

      $reminder = new Reminder;
      $reminder->author = $request->author;
      $reminder->content = $request->content;
      $reminder->email = $request->email;

      $date = date_create_from_format('d/m/Y G:i:s', $request->targetdate);
      $targettimestamp = date_timestamp_get($date);
      $reminder->targetdate = $targettimestamp;
      $setdate = time();
      $reminder->setdate = $setdate;
      $setdate = date('d/m/Y G:i:s', $setdate);

      $rand = str_random(10);

      $reminder->rand = $rand;

      $reminder->save();

      return view('reminderset', compact('setdate', 'rand'))->with([
        'author' => $request->author,
        'email' => $request->email,
        'content' => $request->content,
        'targetdate' => $request->targetdate
      ]);
    }
}
