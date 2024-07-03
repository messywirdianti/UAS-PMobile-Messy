@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
  <div class="container">

  <div class="card">
<div class="card-header">
                        <h2>Edit Rekap Medis Pasien</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('rekapMedis/' .$rekapMedis->idRekapMedis) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="idRekapMedis" id="idRekapMedis" value="{{$rekapMedis->idRekapMedis}}" id="idRekapMedis" />

        <label>Tanggal Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control" value="{{$rekapMedis->tanggalKunjungan}}"></br>

        <label>Keluhan</label></br>
        <input type="text" name="keluhan" id="keluhan" class="form-control" value="{{$rekapMedis->keluhan}}"></br>

        <label>Diagnosa</label></br>
        <input type="text" name="diagnosa" id="diagnosa" class="form-control" value="{{$rekapMedis->diagnosa}}"></br>

        <label>Tekanan Darah</label></br>
        <input type="text" name="tekananDarah" id="tekananDarah" class="form-control" value="{{$rekapMedis->tekananDarah}}"></br>

        <label>SuhuTubuh</label></br>
        <input type="text" name="suhuTubuh" id="suhuTubuh" class="form-control" value="{{$rekapMedis->suhuTubuh}}"></br>

        <label>Berat Badan</label></br>
        <input type="text" name="beratBadan" id="beratBadan" class="form-control" value="{{$rekapMedis->beratBadan}}"></br>

        <label>Tinggi Badan</label></br>
        <input type="text" name="tinggiBadan" id="tinggiBadan" class="form-control" value="{{$rekapMedis->tinggiBadan}}"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop