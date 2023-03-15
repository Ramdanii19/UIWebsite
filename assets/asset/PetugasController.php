<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
    	$petugas = DB::table('users')->get();
    	return view('petugas.petugas',['petugas' => $petugas]);
    }

    public function tambah(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request['password']),
            'level' => $request->level,
        ]);
        return redirect('/petugas');
    }

    public function edit($id)
    {
        $petugas = DB::table('users')->where('id',$id)->get();
        $petugas2 = DB::table('users')->get();
        return view('petugas.petugas_edit',['petugas' => $petugas, 'petugas2' => $petugas2]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request['password']),
            'level' => $request->level,
        ]);
        return redirect('/petugas');
    }

    public function hapus($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/petugas');
    }
}
