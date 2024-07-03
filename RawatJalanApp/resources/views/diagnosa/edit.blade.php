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
      
      <form action="{{ url('diagnosa/' .$diagnosa->idDiagnosa) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="idDiagnosa" id="idDiagnosa" value="{{$diagnosa->idDiagnosa}}" id="idDiagnosa" />

        <label>Tanggal Kunjungan</label></br>
        <input type="date" name="tanggalKunjungan" id="tanggalKunjungan" class="form-control" value="{{$diagnosa->tanggalKunjungan}}"></br>

        <label>keterangan</label></br>
        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$diagnosa->keterangan}}"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop