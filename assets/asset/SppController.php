<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
    	$spp = DB::table('spp')->get();
    	return view('spp.spp',['spp' => $spp]);
 
    }

    public function tambah(Request $request)
    {
        DB::table('spp')->insert([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect('/spp');
    }

    public function edit($id)
    {
        $spp = DB::table('spp')->where('id_spp',$id)->get();
        return view('spp.spp_edit',['spp' => $spp]);
    }

    public function update(Request $request)
    {
        DB::table('spp')->where('id_spp',$request->id)->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
        ]);
        return redirect('/spp');
    }

    public function hapus($id)
    {
        DB::table('spp')->where('id_spp',$id)->delete();
        return redirect('/spp');
    }
}
