@extends('layouts.layout')

@section('content')
    <br></br>
    <form method="POST" action="{{url('pegawai/'.$model->id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH" >
        
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="nama" value="{{ $model->nama}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="nip" value="{{ $model->nip}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="divisi" value="{{ $model->divisi}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="inputTanggalLahir" name="tanggal_lahir" value="{{ $model->tanggal_lahir}}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-5">
                <input type="radio" id="inputjenisKelamin" name="jenis_kelamin" value="laki-laki" {{ $model->jenis_kelamin == "laki-laki" ? 'checked' : '' }}> Laki-Laki <br/>
                <input type="radio" id="inputjenisKelamin" name="jenis_kelamin" value="perempuan" {{ $model->jenis_kelamin == "perempuan" ? 'checked' : '' }}> Perempuan <br/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-5">
                <select class="form-control" id="optionJabatan" name="id_jabatan" value="{{ $model->id_jabatan}}">
                    <option value="">-- Pilih --</option>
                    @foreach($jabatans as $jabatan)
                      <option value="{{ $jabatan->id }}"{{$jabatan->id == $model->id_jabatan ? 'selected' : '' }}>{{$jabatan->Jabatan}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputAlamat" name="alamat" value="{{ $model->alamat}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-5">
                <input type="radio" id="inputAgama" name="agama" value="islam" {{ $model->agama == "islam" ? 'checked' : '' }}> Islam <br/>
                <input type="radio" id="inputAgama" name="agama" value="kristen" {{ $model->jagama == "kristen" ? 'checked' : '' }}> Kristen <br/>
                <input type="radio" id="inputAgama" name="agama" value="hindu" {{ $model->agama == "hindu" ? 'checked' : '' }}> Hindu <br/>
                <input type="radio" id="inputAgama" name="agama" value="budha" {{ $model->agama == "budha" ? 'checked' : '' }}> Budha <br/>
                <input type="radio" id="inputAgama" name="agama" value="lain" {{ $model->agama == "lain" ? 'checked' : '' }}> Lain <br/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputNo" name="no_hp" value="{{ $model->no_hp}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $model->email}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status Pernikahan</label>
            <div class="col-sm-5">
                <input type="radio" id="inputStatus" name="status_pernikahan" value="single" {{ $model->status_pernikahan == "single" ? 'checked' : '' }}> Single <br/>
                <input type="radio" id="inputStatus" name="status_pernikahan" value="menikah" {{ $model->status_pernikahan == "menikah" ? 'checked' : '' }}> Menikah <br/>
            </div>
        </div>
        

        {{-- Nama : <input type="text" name="nama" value="{{ $model->nama}}"><br/>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value="{{ $model->tanggal_lahir}}"><br/>
        Divisi : <input type="text" name="divisi" value="{{ $model->divisi}}"><br/>
        NIP : <input type="text" name="nip" value="{{ $model->nip}}"><br/> --}}

        <button class="btn btn-info" type="submit">Simpan</button> <a class="btn btn-info" href="{{ url('pegawai')}}">Back</a>

        {{-- @method('PUT') --}}
    </form>
@endsection
    