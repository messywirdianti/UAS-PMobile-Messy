@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Create Rekap Medis Pasien</h2>
                    </div>
  <div class="card-body">
      
    <form action="{{ url('rekapMedis') }}" method="post">
        {!! csrf_field() !!}

        <label>NO Rekap Medis</label><br>
        <select name="noRekapMedis" id="noRekapMedis" class="form-control">
        @foreach($pasiens as $pasien)
        <option value="{{ $pasien->noRekapMedis }}">{{ $pasien->namaPengguna }}</option>
        @endforeach
        </select>

        <label>Dokter</label><br>
        <select name="idDokter" id="idDokter" class="form-control">
        @foreach($dokters as $dokter)
        <option value="{{ $dokter->idDokter }}">{{ $dokter->namaDokter }}</option>
        @endforeach
        </select>

        
        <label>Tanggal Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control"></br>

        <label>keluhan</label></br>
        <input type="text" name="keluhan" id="keluhan" class="form-control"></br>

        <label>Diagnosa</label></br>
        <input type="text" name="diagnosa" id="diagnosa" class="form-control"></br>

        <label>Tekanan Darah</label></br>
        <input type="text" name="tekananDarah" id="tekananDarah" class="form-control"></br>

        <label>suhuTubuh</label></br>
        <input type="text" name="suhuTubuh" id="suhuTubuh" class="form-control"></br>

        <label>Berat Badan</label></br>
        <input type="text" name="beratBadan" id="beratBadan" class="form-control"></br>

        <label>Tinggi Badan</label></br>
        <input type="text" name="tinggiBadan" id="tinggiBadan" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
  
  </div>
</div>
</div>
</div>
 
@stop