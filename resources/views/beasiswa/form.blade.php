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
                @if (isset($beasiswa))
                    Ubah
                @else
                    Tambah
                @endif
                    Beasiswa</h2>
            </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="{{isset($beasiswa)? route('beasiswa.update', $beasiswa->id) : route('beasiswa.store')}}" method="POST">
            @csrf
            @if (isset($beasiswa))
                @method('PATCH')
            @endif
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama Beasiswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{isset($beasiswa)? $beasiswa->nama : old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="name">Kepanjangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{isset($beasiswa)? $beasiswa->keterangan : old('keterangan')}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="{{isset($beasiswa)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
                </div>
            </div>
          </form>
        </div>
    </div>
  </section>

@endsection


