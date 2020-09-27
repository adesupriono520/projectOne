<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswas;
use App\Labs;
use App\kelas;
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
            'shift'=> 'required|string|max:1',
            'alamat'=> 'required|string',
            'tgl_lahir'=> 'required|date',
            'jenis_kelamin' => 'required|string | max:1',
            'email'=> 'required|email|max:25 |unique:mahasiswas,email',
            'jurusan' => 'required|string|max:25',
            'phone'=> 'required|numeric|digits_between:11,14|unique:mahasiswas,phone',
            'kodeAccess' => 'sometimes|unique:Labs,kodeAccess',
            ]);
        if($validator->fails()){
            return redirect('create')->withInput()->withErrors($validator);
        }
        $mhs = Siswas::create($input);
        $mhs->save();
        return redirect('home');
    }
    public function show($id){
        $show = Siswas::findOrFail($id);
        return view('HOME.show',compact('show'));
    }
    public function edit($id){
        $edit = Siswas::findOrFail($id);
        !empty($edit->labs->kodeAccess) ? $edit->kodeAccess = $edit->labs->kodeAccess : '-';

        return view('HOME.edit',compact('edit'));
    }
    public function update($id, Request $request){
        $update = Siswas::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input,[
                'nim' => 'required|numeric|unique:mahasiswas,nim,' .$request->input('id'),
                'nama'=> 'required|string|max:30',
                'shift'=> 'required|string|max:1',
                'alamat'=> 'required|string',
                'tgl_lahir'=> 'required|date',
                'jenis_kelamin' => 'required|string | max:1',
                'email'=> 'required|email|max:25 |unique:mahasiswas,email,' .$request->input('id'),
                'jurusan' => 'required|string|max:25',
                'phone'=> 'required|numeric|digits_between:11,14|unique:mahasiswas,phone,' .$request->input('id'),
                'kodeAccess' => 'sometimes|string|unique:Labs,kodeAccess,' .$request->input('id'). ',id_mahasiswas',
        ]);
            if($validator->fails()){
                return redirect('home/' .$id.'/edit')->withInput()->withErrors($validator);
            }
            $update->update($request->all());
            $updateLbas = $update->labs;
            $updateLbas->kodeAccess = $request->input('kodeAccess');
            $updateLbas->labs()->save($update);
        return redirect('home');
    }
    public function destroy($id){
        $delete = Siswas::findOrFail($id);
        $delete->delete();
        return redirect('home');
    }
}
