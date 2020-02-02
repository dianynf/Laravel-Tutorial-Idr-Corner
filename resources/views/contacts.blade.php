<h1>Contacts</h1>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
    </tr>
    @foreach ($contacts as $index=>$con)
        <tr>
        <td>{{$index + 1}}</td>
        <td>{{$con->nama}}</td>
        <td>{{$con->alamat}}</td>
        <td>{{$con->tlp}}</td>
        </tr>
    @endforeach
    
</table>