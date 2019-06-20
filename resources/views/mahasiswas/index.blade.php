<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
<div class="row">
<div class="col-6">
    <h1> Data Mahasiswa </h1>
</div>
<div class="col-6">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Mahasiswa
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="/mahasiswas/create" method="POST">
    {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                <label>Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="custom-select">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="Alamat" rows="3"placeholder="Alamat"></textarea>
  </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>           
        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
      </div>
    </div>
  </div>
</div>
</div>
<table class="table table-hover">


<td>ID</td>
<td>NAMA LENGKAP</td>
<td>JENIS KELAMIN</td>
<td>AGAMA</td>
<td>ALAMAT</td>
<td>AKSI</td>
@foreach($data_siswa as $mahasiswas)
<tr>

<td>{{$mahasiswas->id}}</td>

    <td>{{$mahasiswas->nama}}</td>

        <td>{{$mahasiswas->jenis_kelamin}}</td>
    
            <td>{{$mahasiswas->agama}}</td>
    
                <td>{{$mahasiswas->alamat}}</td>
<td><a href="/mahasiswas/{{$mahasiswas->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
<td><a href="/mahasiswas/{{$mahasiswas->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus')">Delete</a></td>
</tr>
@endforeach
</table>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

