<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswas;
class PagesController extends Controller
{
    public function index(){
        $mahasiswa = Siswas::orderBy('nama','asc')->paginate(5);
        $jumlahData = $mahasiswa->count();
        return view('/HOME.home',compact('mahasiswa','jumlahData'));
    }
    public function create(){
        return view('HOME.create');
    }
    public function store(Request $request){
        Siswas::create($request->all());
        return redirect('home');
    }
    public function show($id){
        $show = Siswas::findOrFail($id);
        return view('HOME.show',compact('show'));
    }
    public function edit($id){
        $edit = Siswas::findOrFail($id);
        return view('HOME.edit',compact('edit'));
    }
    public function update($id, Request $request){
        $update = Siswas::findOrFail($id);
        $update->update($request->all());
        return redirect('home');
    }
    public function destroy($id){
        $delete = Siswas::findOrFail($id);
        $delete->delete();
        return redirect('home');
    }
}
