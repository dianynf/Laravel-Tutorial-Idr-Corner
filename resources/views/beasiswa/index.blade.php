@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-info">
        <div class="box-body">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Beasiswa</h3>
                    <a href="{{route('beasiswa.create')}}" class="btn btn-primary pull-right">Tambah Data</a></h2>
                </div>
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
                                    <a href="{{route('beasiswa.edit', $beasiswa->id)}}" class="btn btn-warning mr-1">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a onclick="deleteHandle({{$beasiswa}})" class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
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
            </div>
        </div>
    </div>

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

