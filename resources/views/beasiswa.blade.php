@extends('layouts.app')
@section('content')
{{-- <div class="card">
    <div class="card-header">
        <h2>Beasiswa
        <a href="{{route('beasiswa.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Singkatan</th>
                    <th scope="col">Kepanjangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($beasiswas->count() > 0)
                    @foreach ($beasiswas as $beasiswa)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$beasiswa->nama}}</td>
                        <td>{{$beasiswa->keterangan}}</td>
                        <th>
                            <a onclick="deleteHandle({{$beasiswa}})" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('beasiswa.edit', $beasiswa->id)}}" class="btn btn-warning mr-1">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        </th>
                     </tr>
                    @endforeach
                    @else
                        <div class="alert alert-info">
                            Data tidak ditemukan
                        </div>
                    @endif
                </tbody>
            </table>
        </div>
</div> --}}

<section class="content">

    <div class="modal fade" id="defaultModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Jenis Beasiswa</h4>
                </div>
                <div class="modal-body" style="margin-top: -10px">
                    <form id="demo-form" data-parsley-validate>
                        @csrf
                        <label for="fullname">Nama Singkat :</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{isset($beasiswa)? $beasiswa->nama : old('nama')}}">
                        <label for="fullname">Kepanjangan :</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{isset($beasiswa)? $beasiswa->keterangan : old('keterangan')}}">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"></i> Close</button>
                            <button type="button" class="btn btn-success pull-right tambah" onclick="register_beasiswa()"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="defaultModalEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="modalEdit"></div>
                <div class="modal-body" style="margin-top: -10px" id="isi2"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="button" class="btn btn-warning pull-right registerEdit"><i class="fa fa-pencil"></i> Ubah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Beasiswa</h3>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#defaultModal"><i class="fa fa-plus"></i> Tambah Beasiswa</button>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <div class="box-body" style="overflow-x: auto;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Singkatan</th>
                            <th scope="col">Kepanjangan</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                            @if ($beasiswas->count() > 0)
                            @foreach ($beasiswas as $index=>$beasiswa)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$beasiswa->nama}}</td>
                                <td>{{$beasiswa->keterangan}}</td>
                                <th>
                                    <a onclick="deleteHandle({{$beasiswa}})" class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('beasiswa.edit', $beasiswa->id)}}" class="btn btn-warning mr-1">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                </th>
                            </tr>
                                @endforeach
                                @else
                                    <div class="alert alert-info">
                                        Data tidak ditemukan
                                    </div>
                                @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.box -->

</section>
@endsection

@section('script')
    <script>
        function deleteHandle(beasiswa){
            var { id, nama} = beasiswa

            $('#formDelete').attr('action', `beasiswa/${id}`)
            $('#ket').html('beasiswa'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection

