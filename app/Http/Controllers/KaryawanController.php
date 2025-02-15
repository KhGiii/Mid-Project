<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // public function getCreatePage(){
    //     return view('createKaryawan');
    // }

    function createKaryawan(Request $request){
        $request->validate([
            'nama'=>'required',
            'umur'=>'required',
            'alamat'=>'required',
            'telp'=>'required'
        ]);

        Karyawan::create([
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
            'telp'=>$request->telp
        ]);

        return redirect('/');

    }
}
