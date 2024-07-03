@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
  <div class="container">

  <div class="card">
<div class="card-header">
                        <h2>Edit Jadwal Dokter</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('jadwal/' .$jadwal->idJadwal) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="idJadwal" id="idJadwal" value="{{$jadwal->idJadwal}}" id="idJadwal" />

        <label>Jenis Kelamain</label></br>
        <select class="form-select" id="jekel" name="jekel" value="{{$jadwal->jekel}}">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>

        <label>Jam Mulai</label></br>
        <input type="time" name="jamMulai" id="jamMulai" class="form-control" value="{{$jadwal->jamMulai}}"></br>

        <label>Jam Selesai</label></br>
        <input type="time" name="jamSelesai" id="jamSelesai" class="form-control" value="{{$jadwal->jamSelesai}}"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop