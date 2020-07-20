<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswas;
use Validator;
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
        $input = $request->all();
        $validator = Validator::make($input,[
            'nim' => 'required|numeric|unique:mahasiswas,nim',
            'nama'=> 'required|string|max:30',
            'kelas'=> 'required|string|max:15',
            'shift'=> 'required|string|max:1',
            'alamat'=> 'required|string',
            'tgl_lahir'=> 'required|date',
            'jenis_kelamin' => 'required|string | max:1',
            'email'=> 'required|email|max:25 |unique:mahasiswas,email',
            'phone'=> 'required|numeric',
            ]);
        if($validator->fails()){
            return redirect('create')->withInput()->withErrors($validator);
        }
        Siswas::create($input);
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
