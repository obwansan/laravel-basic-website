<!-- After calling the errors method on a Validator instance, you will 
receive an Illuminate\Support\MessageBag instance, which has a variety 
of convenient methods for working with error messages. The $errors variable 
that is automatically made available to all views is also an instance of 
the MessageBag class.  -->
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif