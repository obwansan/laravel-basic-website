<!-- Looks in the views folder for a folder called layouts containing a file called app -->
@extends('layouts.app')

@section('content')
  <h1>Contact</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
   <div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
   </div>
   <div class="form-group">
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email']) }}
   </div>
   <div class="form-group">
    {{ Form::label('message', 'Message') }}
    {{ Form::textArea('Message', '', ['class' => 'form-control', 'placeholder' => 'Enter message']) }}
   </div>
   <div>
     <!-- Clicking submit takes you to the /contact/submit route (how?) in web.php which calls
    the submit function on the MessageController class. -->
     {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
   </div>
  {!! Form::close() !!}
@endsection