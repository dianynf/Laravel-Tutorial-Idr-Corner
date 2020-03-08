<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<h1>{{ isset($contact) ? 'Edit' : 'Tambah'}}Contact</h1>
<div class="container">
<form action="{{ isset($contact) ? route('proses.edit', $contact->id)
                                 : route('proses.tambah') }}" method="POST">
    @csrf
    @if (isset($contact))
        @method('PATCH')
    @endif
    <div class="form-group">
        <label for="nama">Nama Lengkap</label> 
    <input type="text" name="nama" id="nama" class="form-control" value="{{ isset($contact) ? $contact->nama : old('nama')}}">   
        @error('nama') <span style="color:red">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <label for="alamt">Alamat</label> 
        <textarea name="alamat" id="alamat" class="form-control"> {{ isset($contact) ? $contact->alamat : old('alamat')}} </textarea>   
        @error('alamat') <span style="color:red">{{$message}}</span> @enderror
    </div>  
    <div class="form-group">
        <label for="tlp">No Telpon</label> 
        <input type="text" name="tlp" id="tlp" class="form-control" value="{{ isset($contact) ? $contact->tlp : old('tlp')}}">   
        @error('tlp') <span style="color:red">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <input type="submit" value="{{ isset($contact) ? 'Edit' : 'Ok'}}" class="btn btn-primary">  
    </div>  
</form>
</div>