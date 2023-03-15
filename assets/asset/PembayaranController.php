<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = DB::table('pembayaran')
        ->rightJoin('siswa', 'pembayaran.nisn', '=', 'siswa.nisn')
        ->get();

        $pembayaran2 = DB::table('pembayaran')
        ->rightJoin('spp', 'pembayaran.id_spp', '=', 'spp.id_spp')
        ->get();


    	return view('pembayaran.pembayaran',['pembayaran' => $pembayaran, 'pembayaran2' => $pembayaran2]);
    }

    public function tambah(Request $request)
    {
        DB::table('pembayaran')->insert([
            'id' => $request->petugas,
            'nisn' => $request->siswa,
            'tgl_bayar' => $request->tanggal,
            'bulan_dibayar' => $request->bulan,
            'tahun_dibayar' => $request->tahun,
            'id_spp' => $request->nominal,
            'jumlah_bayar' => $request->bayar,
        ]);
        return redirect('/pembayaran');
    }

    public function indexhistory()
    {
        $petugas = DB::table('pembayaran')
        ->rightJoin('users', 'pembayaran.id', '=', 'users.id')
        ->rightJoin('siswa', 'pembayaran.nisn', '=', 'siswa.nisn')
        ->rightJoin('spp', 'pembayaran.id_spp', '=', 'spp.id_spp')
        ->get();

    	return view('pembayaran.history',['petugas' => $petugas]);
    }
}
