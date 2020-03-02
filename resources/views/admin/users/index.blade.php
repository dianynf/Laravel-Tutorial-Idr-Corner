@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                          <tr>
                          <th scope="row">{{$user->id}}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                          <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit-users')
                                    <a href="{{route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                @endcan
                                @can('delete-users')
                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="button" class="btn btn-warning">Delete</button>
                                @endcan
                            </form>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="content">
    <div class="row">
      <div class="col-xs-12">

		<div class="box box-info">
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar Alumni</h3>
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#defaultModal">Tambah Alumni</button>
                    </div>
					<div class="box-body" style="overflow-x: auto;">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<th width="5px">No</th>
                                <th>Name</th>
                                <th width="12px">Email</th>
                                <th>Role</th>
                                <th>Actions</th>
							</thead>
							<tbody>
                                @foreach ($users as $user)
                          <tr>
                          <th scope="row">{{$user->id}}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                          <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit-users')
                                    <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                @endcan
                                @can('delete-users')
                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                @endcan
                                </form>
                            </td>
                          </tr>
                        @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
