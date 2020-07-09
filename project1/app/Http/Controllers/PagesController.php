<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswas;
class PagesController extends Controller
{
    public function index(){
        $mahasiswa = Siswas::all();
        return view('/HOME.home',compact('mahasiswa'));
    }
    public function create(){
        return view('create');
    }
}
