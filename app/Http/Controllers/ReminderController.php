<?php

namespace App\Http\Controllers;

use Mail;
use DateTime;
use \App\Reminder as Reminder;
use App\Http\Requests;
use App\Jobs\SendReminderEmail;
use Illuminate\Http\Request;


class ReminderController extends Controller
{
    public function setReminder(Request $request){

      //Create new reminder and set non-convertable inputs
      $reminder = new Reminder;
      $reminder->author = $request->author;
      $reminder->content = $request->content;
      $reminder->email = $request->email;

      //Time & date operations///
      //Target
      date_default_timezone_set('Europe/Tallinn');
      $date = date_create_from_format('d/m/Y G:i:s', $request->targetdate);
      $targettimestamp = date_timestamp_get($date);
      $reminder->targetdate = $targettimestamp;
      
      //Set
      $settimestamp = time();
      $reminder->setdate = $settimestamp;

      //Delay
      $delay = $targettimestamp - $settimestamp;

      //Convert for display to user
      $setdate = date('d/m/Y G:i:s', $settimestamp);

      //Random ID
      $rand = str_random(10);
      $reminder->rand = $rand;
  
      //Save the reminder to DB
      $reminder->save();

      
      //Make the call to the client.
      $this->dispatch((new SendReminderEmail($reminder))->delay($delay));

      //Return the view to user
      return view('reminderset', compact('setdate', 'rand'))->with([
        'author' => $request->author,
        'email' => $request->email,
        'content' => $request->content,
        'targetdate' => $request->targetdate,
        'delay' => $delay
      ]);
    }
}
