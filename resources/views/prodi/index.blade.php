@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-info">
        <div class="box-body">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Prodi</h3>
                    <a href="{{route('prodi.create')}}" class="btn btn-primary pull-right">Tambah Data</a></h2>
                </div>
                <div class="box-body" style="overflow-x: auto;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                            @if ($prodis->count() > 0)
                            @foreach ($prodis as $index=>$prodis)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$prodis->nama}}</td>
                                <th>
                                    <a href="{{route('prodi.edit', $prodis->id)}}" class="btn btn-warning mr-1">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a onclick="deleteHandle({{$prodis}})" class="btn btn-danger">
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
        function deleteHandle(prodi){
            var { id, nama} = prodi

            $('#formDelete').attr('action', `prodi/${id}`)
            $('#ket').html('prodi'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection

