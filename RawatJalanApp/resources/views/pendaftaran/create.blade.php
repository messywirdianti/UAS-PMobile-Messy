@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Create Pendaftaran</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('pendaftaran') }}" method="post">
        {!! csrf_field() !!}

        <label>NO Rekap Medis</label></br>
        <select name="noRekapMedis" id="noRekapMedis" class="form-control">
        @foreach($pasiens as $pasien)
        <option value="{{$pasien->noRekapMedis}}">{{$pasien->noRekapMedis}}</option>
        @endforeach
        </select>

        <label>Nama Lengkap</label></br>
        <input type="text" name="namaLengkap" id="namaLengkap" class="form-control"></br>

        <label>Tempat Lahir</label></br>
        <input type="text" name="tempatLahir" id="tempatLahir" class="form-control"></br>

        <label>Tanggal Lahir</label></br>
        <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control"></br>

        <div class="mb-3">
            <label for="jekel" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jekel" name="jekel">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
        </div> 

        <label>Tanggal Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control"></br>

        <label>Asal Rujukan</label></br>
        <input type="text" name="asalRujukan" id="asalRujukan" class="form-control"></br>

        <label>Poli Tujuan</label></br>
        <input type="text" name="poliTujuan" id="poliTujuan" class="form-control"></br>

        <label>Dokter</label></br>
        <input type="text" name="dokter" id="dokter" class="form-control"></br>
        
        <label>Pekerjaan</label></br>
        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"></br>

        <label for="noHp" class="form-label">NO HP</label>
        <input type="text" class="form-control" id="noHp" name="noHp">
    
        <label>Agama</label></br>
        <input type="text" name="agama" id="agama" class="form-control"></br>

        <label>kewarganegaraan</label></br>
        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control"></br>
  
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>
</div>
 
@stop