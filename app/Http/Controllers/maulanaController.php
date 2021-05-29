<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class maulanaController extends Controller
{
    public function buku()
    {
        $buku = DB::table('ms_buku')->get();
        return view('buku0138',['buku' => $buku]);
    }
    public function home()
    {
        return view('home0138');
    }
}