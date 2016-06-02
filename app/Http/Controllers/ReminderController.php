<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Reminder as Reminder;

class ReminderController extends Controller
{
    public function setReminder(Request $request){

      $reminder = new Reminder;
      $reminder->author = $request->author;
      $reminder->content = $request->content;
      $reminder->email = $request->email;
      $reminder->targetdate = $request->targetdate;

      $rand = str_random(10);

      $reminder->rand = $rand;

      $reminder->save();

      return view('reminderset', array('reminder' => ));
    }
}
