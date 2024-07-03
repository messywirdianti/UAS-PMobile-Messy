@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Create Jadwal Dokter</h2>
                    </div>
  <div class="card-body">
      
    <form action="{{ url('jadwal') }}" method="post">
        {!! csrf_field() !!}

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

        <div class="mb-3">
            <label for="jekel" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jekel" name="jekel">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
        </div> 

        <label>Jam Mulai</label></br>
        <input type="time" name="jamMulai" id="jamMulai" class="form-control"></br>

        <label>Jam Selesai</label></br>
        <input type="time" name="jamSelesai" id="jamSelesai" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
  
  </div>
</div>
</div>
</div>
 
@stop