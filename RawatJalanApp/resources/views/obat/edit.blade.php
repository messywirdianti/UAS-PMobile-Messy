@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Edit Obat</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('obat/' .$obat->idObat) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="idObat" id="idObat" value="{{$obat->idObat}}" id="idObat" />

        <label>Name Obat</label></br>
        <input type="text" name="namaObat" id="namaObat" value="{{$obat->namaObat}}" class="form-control"></br>

        <label>Keterangan</label></br>
        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$obat->keterangan}}"></br>
        
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$obat->harga}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop