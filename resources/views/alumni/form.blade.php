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
          {{-- enctype untuk upload file --}}
          <form action="{{isset($alumni)? route('alumni.update', $alumni->id) : route('alumni.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($alumni))
                @method('PATCH')
            @endif
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    @error('nama') <span style="color:red">{{$message}}</span>@enderror
                    <input type="text" placeholder="Nama Lengkap" name="nama" id="nama" class="form-control" value="{{isset($alumni)? $alumni->nama : old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="name">Jenis Kelamin</label><br>
                    @error('jk') <span style="color:red">{{$message}}</span>@enderror
                    {{-- <input type="text" placeholder="jk" name="jk" id="jk" class="form-control" value="{{isset($alumni)? $alumni->jk : old('jk')}}"> --}} {{-- <div class="radio"> --}}
                      <label>
                        <input type="radio" class="flat-red form-control" name="jk" id="jk" value="1" checked value="{{isset($alumni)? $alumni->jk : old('jk')}}">
                        <span>Laki - Laki</span>
                      </label>
                      <label>
                        <input type="radio" class="flat-red form-control" name="jk" id="jk" value="0" value="{{isset($alumni)? $alumni->jk : old('jk')}}">
                        <span>Perempuan</span>
                      </label>
                     {{-- </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="name">Tempat Lahir</label>
                        @error('tmp_lahir') <span style="color:red">{{$message}}</span>@enderror
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                            </div>
                            <input type="text" placeholder="Tempat Lahir" name="tmp_lahir" id="tmp_lahir" class="form-control" value="{{isset($alumni)? $alumni->tmp_lahir : old('tmp_lahir')}}">
                        </div>
                    </div>
                <div class="form-group">
                    <label for="name">Tanggal Lahir</label>
                    @error('tgl_lahir') <span style="color:red">{{$message}}</span>@enderror
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" placeholder="Tanggal Lahir" class="form-control pull-right" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{isset($alumni)? $alumni->tgl_lahir : old('tgl_lahir')}}">
                    </div>
                    <!-- /.input group -->
                  </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    @error('email') <span style="color:red">{{$message}}</span>@enderror
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" name="email" placeholder="Email"  id="email" class="form-control" value="{{isset($alumni)? $alumni->email : old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">NO HP</label>
                    @error('no_hp') <span style="color:red">{{$message}}</span>@enderror
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="number" name="no_hp" placeholder="Nomor Hanphone" id="no_hp" class="form-control" value="{{isset($alumni)? $alumni->no_hp : old('no_hp')}}">
                      </div>
                </div>
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <input type="text" placeholder="Alamat" name="alamat" id="alamat" class="form-control" value="{{isset($alumni)? $alumni->alamat : old('alamat')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    @error('foto') <span style="color:red">{{$message}}</span>@enderror
                    <input type="file" name="foto" id="foto" value="{{isset($alumni)? $alumni->foto : old('foto')}}">
                    <p class="help-block">Foto Profile Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.</p>
                  </div>
                <div class="form-group">
                    <label for="name">Angkatan</label>
                    @error('angkatan') <span style="color:red">{{$message}}</span>@enderror
                    <input type="number" placeholder="Angkatan" name="angkatan" id="angkatan" class="form-control" value="{{isset($alumni)? $alumni->angkatan : old('angkatan')}}">
                </div>
                <div class="form-group">
                    <label for="name">Status Kerja</label><br>
                    @error('status_kerja') <span style="color:red">{{$message}}</span>@enderror
                    <label>
                        <input type="radio" class="flat-red form-control" name="status_kerja" id="status_kerja" value="1" checked value="{{isset($alumni)? $alumni->status_kerja : old('status_kerja')}}">
                        <span>Berkerja</span>
                      </label>
                      <label>
                        <input type="radio" class="flat-red form-control" name="status_kerja" id="status_kerja" value="0" value="{{isset($alumni)? $alumni->status_kerja : old('status_kerja')}}">
                        <span>Belum Berkerja</span>
                      </label>
                </div>
                <div class="form-group">
                    <label for="name">Tempat Kerja</label>
                    @error('tmp_kerja') <span style="color:red">{{$message}}</span>@enderror
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                    <input type="text" placeholder="Tempat Kerja" name="tmp_kerja" id="tmp_kerja" class="form-control" value="{{isset($alumni)? $alumni->tmp_kerja : old('tmp_kerja')}}">
                  </div>
                </div>
                <div class="form-group">
                    <label for="kategori_id">Pilih Jenis Beastudi</label>
                    @error('beasiswa_id') <span style="color:red">{{$message}}</span>@enderror
                    <select name="beasiswa_id" id="beasiswa_id" class="form-control">
                        @foreach ($beasiswas as $beasiswa)
                            <option value="{{ $beasiswa->id}}">{{$beasiswa->nama}}</option>
                        @endforeach
                    </select>
                <div class="form-group">
                    <label for="name">Pilih Jenis Prodi</label>
                    @error('prodi_id') <span style="color:red">{{$message}}</span>@enderror
                    <select name="prodi_id" id="prodi_id" class="form-control">
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->id}}">{{$prodi->nama}}</option>
                        @endforeach
                    </select>
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


