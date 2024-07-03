@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Edit Dokter</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('dokter/' .$dokter->idDokter) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="idDokter" id="idDokter" value="{{$dokter->idDokter}}" id="idDokter" />

        <label>Name Dokter</label></br>
        <input type="text" name="namaDokter" id="namaDokter" value="{{$dokter->namaDokter}}" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control" value="{{$dokter->email}}"></br>

        <label>No HP</label></br>
        <input type="text" name="noHp" id="noHp" value="{{$dokter->noHp}}" class="form-control"></br>

        <label>Spesialis</label></br>
        <input type="text" name="spesialis" id="spesialis" value="{{$dokter->spesialis}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop