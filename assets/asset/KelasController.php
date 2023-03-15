<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = DB::table('kelas')->get();
    	return view('kelas.kelas',['kelas' => $kelas]);
 
    }

    public function tambah(Request $request)
    {
        DB::table('kelas')->insert([
            'nama_kelas' => $request->kelas,
            'kompetensi_keahlian' => $request->jurusan,
        ]);
        return redirect('/kelas');
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')->where('id_kelas',$id)->get();
        return view('kelas.kelas_edit',['kelas' => $kelas]);
    }

    public function update(Request $request)
    {
        DB::table('kelas')->where('id_kelas',$request->id)->update([
            'nama_kelas' => $request->kelas,
            'kompetensi_keahlian' => $request->jurusan
        ]);
        return redirect('/kelas');
    }

    public function hapus($id)
    {
        DB::table('kelas')->where('id_kelas',$id)->delete();
        return redirect('/kelas');
    }
}
