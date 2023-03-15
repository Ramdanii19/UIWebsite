<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa = DB::table('siswa')
            ->leftJoin('spp', 'siswa.id_spp', '=', 'spp.id_spp')
            ->leftJoin('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->get();

        $siswa2 = DB::table('siswa')
            ->rightJoin('spp', 'siswa.id_spp', '=', 'spp.id_spp')
            ->rightJoin('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->get();
 
    	return view('siswa.siswa',['siswa' => $siswa, 'siswa2' => $siswa2]);
    }

    public function tambah(Request $request)
    {
        DB::table('siswa')->insert([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('nisn',$id)->get();

        $siswa2 = DB::table('siswa')
            ->rightJoin('spp', 'siswa.id_spp', '=', 'spp.id_spp')
            ->get();

    	return view('siswa.siswa_edit',['siswa' => $siswa, 'siswa2' => $siswa2]);
    }

    public function update(Request $request)
    {
        DB::table('siswa')->where('nisn',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect('/siswa');
    }

    public function hapus($id)
    {
        DB::table('siswa')->where('nisn',$id)->delete();
        return redirect('/siswa');
    }


}
