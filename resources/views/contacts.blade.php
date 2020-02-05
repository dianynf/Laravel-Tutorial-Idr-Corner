<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
{{-- jika ada variabel contak nya maka tampilkan edit contact jika tidak ada maka tampilkan tambah --}}
<h1>Contacts</h1>
<div class="container">
<a href="{{route('tambah.contact')}}" class="btn btn-primary">Add Contact</a>
    <br><br>
<table class="table table-border">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Aksi</th>
    </tr>
    @foreach ($contacts as $index=>$con)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$con->nama}}</td>
            <td>{{$con->alamat}}</td>
            <td>{{$con->tlp}}</td>
            <td>
                <a href="{{ route('edit.contact', $con->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('delete.contact', $con->id) }}" method="POST">
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
            </td>
        </tr>
    @endforeach
    
</table>
</div>