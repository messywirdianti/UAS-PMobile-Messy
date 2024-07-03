@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Create Resep Pasien</h2>
                    </div>
  <div class="card-body">
      
    <form action="{{ url('resep') }}" method="post">
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

        <label>Obat</label><br>
        <select name="idObat" id="idObat" class="form-control">
        @foreach($obats as $obat)
        <option value="{{ $obat->idObat }}">{{ $obat->namaObat }}</option>
        @endforeach
        </select>

        
        <label>keterangan</label></br>
        <input type="text" name="keterangan" id="keterangan" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
  
  </div>
</div>
</div>
</div>
 
@stop