<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // We obtain an instance of the current HTTP request via dependency injection by type hinting the Illuminate\Http\Request class on the controller method (i.e. type hinting the $request parameter). The incoming request instance will automatically be injected by the service container.
    public function submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      return 'SUCCESS';
    }
}
