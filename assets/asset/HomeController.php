<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$users = DB::table('users')->count();
    	$siswa = DB::table('siswa')->count();
    	$kelas = DB::table('kelas')->count();
    	$spp = DB::table('spp')->sum('nominal');

    	return view('dashboard',['users' => $users, 'siswa' => $siswa, 'kelas' => $kelas, 'spp' => $spp,]);
    }
}
