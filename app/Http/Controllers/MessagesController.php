<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class MessagesController extends Controller
{
    // We obtain an instance of the current HTTP request (object) via dependency injection by type hinting the Illuminate\Http\Request class on the controller method (i.e. type hinting the $request parameter). The incoming request instance will automatically be injected by the service container.
    public function submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      // Create new message (object)
      $message = new Message;
      // Get the name entered in the form (name="name" attribute)
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      // Save message
      $message->save();

      // Redirect
      return redirect('/');
    }

    public function getMessages() {
      // Eloquent syntax to get all messages from the database.
      // Message is the model...which seems to be a class that you 
      // can call the all() method on.
      $messages = Message::all();

      // Return (render) the messages view template. It must be an
      // object because you can call the with method on it. Pass the 
      // messages retrieved from the database into the messages template.
      return view('messages')->with('messages', $messages);
    }
}
