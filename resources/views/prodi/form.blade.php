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
            <h3 class="box-title">
                @if (isset($prodi))
                    Ubah
                @else
                    Tambah
                @endif
                    Prodi</h2>
            </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="{{isset($prodi)? route('prodi.update', $prodi->id) : route('prodi.store')}}" method="POST">
            @csrf
            @if (isset($prodi))
                @method('PATCH')
            @endif
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama prodi</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{isset($prodi)? $prodi->nama : old('nama')}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="{{isset($prodi)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
                </div>
            </div>
          </form>
        </div>
    </div>
  </section>

@endsection


