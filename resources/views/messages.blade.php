<!-- Looks in the views folder for a folder called layouts containing a file called app -->
@extends('layouts.app')

@section('content')
  <h1>Messages</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <li class="list-group-item">Email: {{$message->email}}</li>
        <li class="list-group-item">Message: {{$message->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection

<!-- The paragraph is rendered by '@show' in app.blade.php
'@parent' means the HTML containing '@show' is still rendered,
rather than being overwritten. -->
@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection