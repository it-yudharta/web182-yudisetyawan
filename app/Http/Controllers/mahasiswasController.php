<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswasController extends Controller
{
    public function index()
{
    $data_siswa = \App\mahasiswa::all();
    return view ('mahasiswas.index',['data_siswa' => $data_siswa] );
}
    public function create(Request $request)
{
    \App\mahasiswa::create($request->all());
    return redirect('\mahasiswas')->with('sukses','Data berhasil diinput');
}
    public function edit($id)        
{
    $mahasiswas= \App\mahasiswa::find($id);
    return view ('mahasiswas/edit',['mahasiswa'=>$mahasiswas]);
}
    public function update(Request $request,$id) 
{
    $mahasiswas= \App\mahasiswa::find($id);
    $mahasiswas->update($request->all());
    return redirect('/mahasiswas')->with('sukses','Data berhasil diupdate');
}
    public function delete($id) 
{
    $mahasiswas= \App\mahasiswa::find($id);
    $mahasiswas->delete($mahasiswas);
    return redirect('/mahasiswas')->with('sukses','Data berhasil dihapus');
}
}