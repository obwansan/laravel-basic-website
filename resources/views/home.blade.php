<!-- Looks in the views folder for a folder called layouts containing a file called app -->
@extends('layouts.app')

@section('content')
  <h1>Home</h1>
@endsection

<!-- The paragraph is rendered by '@show' in app.blade.php
'@parent' means the HTML containing '@show' is still rendered,
rather than being overwritten. -->
@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection