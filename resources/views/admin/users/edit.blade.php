@extends('layouts.app')

@section('content')

<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3>Edit User {{$user->name}}</h3>
          </div>
                <form action="{{route('admin.users.update', $user)}}" method="POST">
                    <div class="box-body">
                    <div class="form-group">
                        <label for="name">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        @foreach ($roles as $role)
                            <div class="form-check">
                            <input type="checkbox" name="roles[]" value="{{$role->id}}"
                            @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                            <label>{{$role->name}}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    </div>
                </form>
        </div>
    </div>
  </section>

@endsection
