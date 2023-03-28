<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawai::all();
        return view('pegawai.index',compact(
            'datas'
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jabatans = Jabatan::all();
        return view('pegawai.create', compact('jabatans'));

        $model = new Pegawai();
        return view ('pegawai.create',compact(
            'model'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->id_jabatan == 1){
            $jabatan = "SUPERVISOR";
            $gaji = 10000000;
            $transport = 1000000;
            $tunjangan = 1500000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else if ($request->id_jabatan == 2){
            $jabatan = "OFFICER";
            $gaji = 5000000;
            $transport = 750000;
            $tunjangan = 1000000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else if ($request->id_jabatan == 3){
            $jabatan = "SUPERINTENDENT";
            $gaji = 15000000;
            $transport = 1250000;
            $tunjangan = 2000000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else{
            $jabatan = "MANAGER";
            $gaji = 20000000;
            $transport = 1500000;
            $tunjangan = 2500000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;            
        }

        $model = new Pegawai();
        $model->nama =$request->nama;
        $model->nip =$request->nip;
        $model->divisi =$request->divisi;
        $model->tanggal_lahir =$request->tanggal_lahir;
        $model->jenis_kelamin =$request->jenis_kelamin;
        $model->id_jabatan =$request->id_jabatan;
        $model->alamat =$request->alamat;
        $model->agama =$request->agama;
        $model->no_hp =$request->no_hp;
        $model->email =$request->email;
        $model->status_pernikahan =$request->status_pernikahan;
        $model->total_gaji =$total_gaji;
        $model->Jabatan =$jabatan;

        $model->save();

        return redirect('pegawai');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Pegawai::find($id);
        $jabatans = Jabatan::all();
        return view ('pegawai.edit',compact(
            'model','jabatans'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Pegawai::find($id);

        if ($request->id_jabatan == 1){
            $jabatan = "SUPERVISOR";
            $gaji = 10000000;
            $transport = 1000000;
            $tunjangan = 1500000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else if ($request->id_jabatan == 2){
            $jabatan = "OFFICER";
            $gaji = 5000000;
            $transport = 750000;
            $tunjangan = 1000000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else if ($request->id_jabatan == 3){
            $jabatan = "SUPERINTENDENT";
            $gaji = 15000000;
            $transport = 1250000;
            $tunjangan = 2000000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;

        }else{
            $jabatan = "MANAGER";
            $gaji = 20000000;
            $transport = 1500000;
            $tunjangan = 2500000;
            $potongan_bpjs = $gaji*4/100;
            $gaji_pokok = $gaji-$potongan_bpjs;
            $total_gaji = $gaji_pokok+$transport+$tunjangan;            
        }

        $model->nama =$request->nama;
        $model->nip =$request->nip;
        $model->divisi =$request->divisi;
        $model->tanggal_lahir =$request->tanggal_lahir;
        $model->jenis_kelamin =$request->jenis_kelamin;
        $model->id_jabatan =$request->id_jabatan;
        $model->alamat =$request->alamat;
        $model->agama =$request->agama;
        $model->no_hp =$request->no_hp;
        $model->email =$request->email;
        $model->status_pernikahan =$request->status_pernikahan;
        $model->total_gaji =$total_gaji;
        $model->Jabatan =$jabatan;
        
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pegawai::find($id);
        $model->delete();

        return redirect('pegawai');

    }
}
