@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-info">
        <div class="box-body">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Alumni</h3>
                    <a href="{{route('alumni.create')}}" class="btn btn-primary pull-right">Tambah Data</a></h2>
                </div>
                <div class="box-body" style="overflow-x: auto;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Jenis Beastudi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                            @if ($alumnis->count() > 0)
                            @foreach ($alumnis as $index=>$alumni)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$alumni->nama}}</td>
                                <td>{{$alumni->email}}</td>
                                <td>{{$alumni->no_hp}}</td>
                                <td>{{$alumni->beastudi_id}}</td>
                                <td>{{$alumni->status_kerja}}</td>
                                <td><img src="{{asset('storage/'.$alumni->foto)}}" width="100px"></td>
                                <th>
                                    <a href="{{route('alumni.edit', $alumni->id)}}" class="btn btn-warning mr-1">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a onclick="deleteHandle({{$alumni}})" class="btn btn-danger">
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
        function deleteHandle(alumni){
            var { id, nama} = alumni

            $('#formDelete').attr('action', `alumni/${id}`)
            $('#ket').html('alumni'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection


