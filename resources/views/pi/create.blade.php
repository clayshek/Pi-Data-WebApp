@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

    <h2>Add new Pi to system</h2>

    <form method="POST" action="/pi">

    {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>


@include ('layouts.errors')
</div>

<br><br>
@endsection