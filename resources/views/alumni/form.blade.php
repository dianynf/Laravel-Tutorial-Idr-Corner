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
                @if (isset($alumni))
                    Ubah
                @else
                    Tambah
                @endif
                    Alumni</h2>
            </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="{{isset($alumni)? route('alumni.update', $alumni->id) : route('alumni.store')}}" method="POST">
            @csrf
            @if (isset($alumni))
                @method('PATCH')
            @endif
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{isset($alumni)? $alumni->nama : old('nama')}}">
                </div>
                <div class="form-group">
                    <label class="radio inline">
                        <input type="radio" class="jk" name="jk" id="jk" value="1" checked value="{{isset($alumni)? $alumni->jk : old('jk')}}">
                        <span>Laki - Laki &nbsp; &nbsp; &nbsp;</span>
                    </label>
                    <label class="radio inline">
                        <input type="radio" class="jk" name="jk" id="jk" value="0" value="{{isset($alumni)? $alumni->jk : old('jk')}}">
                        <span>Perempuan</span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="name">Tempat Lahir</label>
                    <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="{{isset($alumni)? $alumni->tmp_lahir : old('tmp_lahir')}}">
                </div>
                <div class="form-group">
                    <label for="name">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{isset($alumni)? $alumni->tgl_lahir : old('tgl_lahir')}}">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{isset($alumni)? $alumni->email : old('email')}}">
                </div>
                <div class="form-group">
                    <label for="name">NO HP</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{isset($alumni)? $alumni->no_hp : old('no_hp')}}">
                </div>
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{isset($alumni)? $alumni->alamat : old('alamat')}}">
                </div>
                <div class="form-group">
                    <label for="name">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" value="{{isset($alumni)? $alumni->foto : old('foto')}}">
                </div>
                <div class="form-group">
                    <label for="name">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" class="form-control" value="{{isset($alumni)? $alumni->angkatan : old('angkatan')}}">
                </div>
                <div class="form-group">
                    <label for="name">Status Kerja</label>
                    <input type="text" name="status_kerja" id="status_kerja" class="form-control" value="{{isset($alumni)? $alumni->status_kerja : old('status_kerja')}}">
                </div>
                <div class="form-group">
                    <label for="name">Tempat Kerja</label>
                    <input type="text" name="tmp_kerja" id="tmp_kerja" class="form-control" value="{{isset($alumni)? $alumni->tmp_kerja : old('tmp_kerja')}}">
                </div>
                <div class="form-group">
                    <label for="name">Pilih Jenis Beastudi</label>
                    <input type="text" name="beastudi_id" id="beastudi_id" class="form-control" value="{{isset($alumni)? $alumni->beastudi_id : old('beastudi_id')}}">
                </div>
                <div class="form-group">
                    <label for="name">Pilih Jenis Prodi</label>
                    <input type="text" name="prodi_id" id="prodi_id" class="form-control" value="{{isset($alumni)? $alumni->prodi_id : old('prodi_id')}}">
                </div>

                <div class="form-group">
                    <input type="submit" value="{{isset($alumni)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
                </div>
            </div>
          </form>
        </div>
    </div>
  </section>

@endsection


