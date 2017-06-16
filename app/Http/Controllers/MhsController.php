<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mhs;

class MhsController extends Controller
{
    public function index(){
    	return Mhs::orderBy('id', 'asc')->get();
    }

    public function tampil($id){
    	return Mhs::find($id);
    }

    public function buat(Request $request){
    	$mhs = new Mhs;

    	$mhs->NIM = $request->input('nim');
    	$mhs->nama = $request->input('nama');
    	$mhs->alamat = $request->input('alamat');
    	$mhs->save();

    	return "Data berhasil disimpan dengan id ".$mhs->id;
    }

    public function edit($id, Request $request){
    	$mhs = Mhs::find($id);

    	$mhs->NIM = $request->input('nim');
    	$mhs->nama = $request->input('nama');
    	$mhs->alamat = $request->input('alamat');
    	$mhs->save();

    	return "Data berhasil diedit dengan id ".$mhs->id;
    }

    public function hapus($id){
    	Mhs::destroy($id);
    	return "Berhasil menghapus data dengan id ".$request->input('id');
    }
}
