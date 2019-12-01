@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a User</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Nome:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">    
              <label for="first_name">email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">    
              <label for="first_name">senha:</label>
              <input type="password" class="form-control" name="senha"/>
          </div>
             
          <button type="submit" class="btn btn-primary">Add user</button>
      </form>
  </div>
</div>
</div>
@endsection