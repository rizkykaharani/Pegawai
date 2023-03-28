@extends('layouts.layout')

@section('content')
    <br></br>
    <form method="POST" action="{{url('pegawai')}}">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="nip">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="inputTanggalLahir" name="tanggal_lahir">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="divisi">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-5">
                <input type="radio" id="inputjenisKelamin" name="jenis_kelamin" value="laki-laki"> Laki-Laki <br/>
                <input type="radio" id="inputjenisKelamin" name="jenis_kelamin" value="perempuan"> Perempuan <br/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-5">
                <select class="form-control" id="optionJabatan" name="id_jabatan">
                    <option value="">-- Pilih --</option>
                    @foreach($jabatans as $jabatan)
                      <option value="{{ $jabatan->id }}">{{$jabatan->Jabatan}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputAlamat" name="alamat">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-5">
                <input type="radio" id="inputAgama" name="agama" value="islam"> Islam <br/>
                <input type="radio" id="inputAgama" name="agama" value="kristen"> Kristen <br/>
                <input type="radio" id="inputAgama" name="agama" value="hindu"> Hindu <br/>
                <input type="radio" id="inputAgama" name="agama" value="budha"> Budha <br/>
                <input type="radio" id="inputAgama" name="agama" value="lain"> Lain <br/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputNo" name="no_hp">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status Pernikahan</label>
            <div class="col-sm-5">
                <input type="radio" id="inputStatus" name="status_pernikahan" value="single"> Single <br/>
                <input type="radio" id="inputStatus" name="status_pernikahan" value="menikah"> Menikah <br/>
            </div>
        </div>
        
        <br/>
        <button class="btn btn-info" type="submit">Simpan</button>
        <br/>
        
        {{-- Nama : <input type="text" name="nama"><br/>
        Tanggal Lahir : <input type="text" name="tanggal_lahir"><br/>
        Divisi : <input type="text" name="divisi"><br/>
        NIP : <input type="text" name="nip"><br/> --}}

    </form>
@endsection
    