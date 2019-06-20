<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Edit data Mahasiswa</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
Data berhasil diupdate!
</div>
@endif
<div class="row">
<div class="col-lg-12">
<form action="/mahasiswas/{{$mahasiswa->id}}/update" method="POST">
    {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" 
                    value="{{$mahasiswa->id}}">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap"
                    value="{{$mahasiswa->nama}}">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin "class="form-control" id="exampleFormControlSelect1">
                    <option value="L"@if($mahasiswa->jenis_kelamin == 'L')selected @endif> Laki-laki </option>
                    <option value="P"@if($mahasiswa->jenis_kelamin == 'P')selected @endif> Perempuan </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama"
                    value="{{$mahasiswa->agama}}">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="Alamat" rows="3"placeholder="Alamat">{{$mahasiswa->alamat}}</textarea>
  </div>
  </div>
  </div>
      <div class="modal-footer">       
        <button type="submit" class="btn btn-warning">Update</button>
        </form>
</div>
