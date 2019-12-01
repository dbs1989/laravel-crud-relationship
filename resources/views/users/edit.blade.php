@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a user</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value={{ $user->name }} />
            </div>
            <div class="form-group">

                <label for="email">email:</label>
                <input type="text" class="form-control" name="email" value={{ $user->email }} />
            </div>
            <div class="form-group">

                <label for="senha">senha:</label>
                <input type="password" class="form-control" name="senha" value={{ $user->password }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection