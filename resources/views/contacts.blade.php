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
                <button class="btn btn-danger" onClick="hendelDelete({{ $con }})">Delete</button>
            </td>
        </tr>
    @endforeach
    
</table>
</div>

    <div class="modal" tabindex="-1" role="dialog" id="modaldelete">
        <form action="" method="POST" id="formdelete">
            @csrf
            @method('DELETE')
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Apakah anda yakin menghapus contact <span id="namaorang"></span></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-danger" value="Ok Delete"> 
                </div>
            </div>
        </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    function hendelDelete(contact){

        //fungsi Es6 membuat variabel baru 
        // setiap pagar berfungsi untuk mencari form delete
        var {id, nama} = contact
        $('#modaldelete').modal('show');
        $('#formdelete').attr('action', `deletecontact/${id}`)
        $('#namaorang').html(nama);
    }
</script>