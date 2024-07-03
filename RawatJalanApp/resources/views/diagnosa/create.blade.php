@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Create Diagnosa Pasien</h2>
                    </div>
  <div class="card-body">
      
    <form action="{{ url('diagnosa') }}" method="post">
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

        <label>PoliKlinik</label><br>
        <select name="idPoliKlinik" id="idPoliKlinik" class="form-control">
        @foreach($poli_kliniks as $poliKlinik)
        <option value="{{ $poliKlinik->idPoliKlinik }}">{{ $poliKlinik->namaPoliKlinik }}</option>
        @endforeach
        </select>


        <label>Tanggak Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control"></br>

        <label>keterangan</label></br>
        <input type="text" name="keterangan" id="keterangan" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
  
  </div>
</div>
</div>
</div>
 
@stop