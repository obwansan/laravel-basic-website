<!-- Looks in the views folder for a folder called layouts containing a file called app -->
@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eveniet soluta beatae asperiores aliquid? Repellendus quas earum reiciendis. Molestiae eos iusto tenetur et velit eveniet, sapiente aliquam possimus earum facilis!</p>
@endsection

<!-- The paragraph is rendered by '@show' in app.blade.php
'@parent' means the HTML containing '@show' is still rendered,
rather than being overwritten. -->
@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection