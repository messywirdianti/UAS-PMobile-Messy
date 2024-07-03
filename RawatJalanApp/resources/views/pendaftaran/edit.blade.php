@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
  <div class="container">

  <div class="card">
<div class="card-header">
                        <h2>Edit Pendaftaran Pasien</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('pendaftaran/' .$pendaftaran->idDaftar) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="idDaftar" id="idDaftar" value="{{$pendaftaran->idDaftar}}" id="idDaftar" />
        <label>Nama Lengkap</label></br>
        <input type="text" name="namaLengkap" id="namaLengkap" class="form-control" value="{{$pendaftaran->namaLengkap}}"></br>

        <label>Tempat Lahir</label></br>
        <input type="text" name="tempatLahir" id="tempatLahir" class="form-control" value="{{$pendaftaran->tempatLahir}}"></br>

        <label>Tanggal Lahir</label></br>
        <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control" value="{{$pendaftaran->tanggalLahir}}"></br>

        <label>Jenis Kelamain</label></br>
        <select class="form-select" id="jekel" name="jekel" value="{{$pendaftaran->jekel}}">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>

        <label>Tanggal Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control" value="{{$pendaftaran->tanggalKunjungan}}"></br>

        <label>Asal Rujukan</label></br>
        <input type="text" name="asalRujukan" id="asalRujukan" class="form-control" value="{{$pendaftaran->asalRujukan}}"></br>

        <label>Poli Tujuan</label></br>
        <input type="text" name="poliTujuan" id="poliTujuan" class="form-control" value="{{$pendaftaran->poliTujuan}}"></br>

        <label>Dokter</label></br>
        <input type="text" name="dokter" id="dokter" class="form-control" value="{{$pendaftaran->dokter}}"></br>

        <label>Pekerjaan</label></br>
        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{$pendaftaran->pekerjaan}}"></br>

        <label>No HP</label></br>
        <input type="text" name="noHp" id="noHp" class="form-control" value="{{$pendaftaran->noHp}}"></br>

        <label>Agama</label></br>
        <input type="text" name="agama" id="agama" class="form-control" value="{{$pendaftaran->agama}}"></br>

        <label>kewarganegaraan</label></br>
        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" value="{{$pendaftaran->kewarganegaraan}}"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop