@extends('layouts.layout')
{{-- @dd($datas) --}}

@section('content')
    <br></br>
    <a class="btn btn-info" href="{{ url('pegawai/create')}}">Tambah</a>
    <br></br>
    <table class="table-bordered table">
        <tr>
            <th>Nama</th>
            <th>Nip</th>
            <th>Divisi</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Status Pernikahan</th>
            <th>Total Gaji</th>
            <th colspan="2"></th>
        </tr>
        @foreach($datas as $key=>$value)
        <?php $hasil_rupiah = "Rp " . number_format($value->total_gaji,0,',','.'); ?>
            <tr>
                <td>{{$value->nama}}</td>
                <td>{{$value->nip}}</td>
                <td>{{$value->divisi}}</td>
                <td>{{$value->tanggal_lahir}}</td>
                <td>{{$value->jenis_kelamin}}</td>
                <td>{{$value->Jabatan}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->agama}}</td>
                <td>{{$value->no_hp}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->status_pernikahan}}</td>
                <td>{{$hasil_rupiah}}</td>
                
                <td><a class="btn btn-info" href="{{ url('pegawai/'.$value->id.'/edit')}}">Update</a></td>
                <td>

                    <form action="{{ url('pegawai/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name=_method value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </table>
@endsection
    