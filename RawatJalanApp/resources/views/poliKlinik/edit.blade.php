@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Edit PoliKlinik</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('poliKlinik/' .$poliKlinik->idPoliKlinik) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="idPoliKlinik" id="idPoliKlinik" value="{{$poliKlinik->idPoliKlinik}}" id="noRekapMedis" />

        <label>PoliKlinik</label></br>
        <input type="text" name="namaPoliKlinik" id="namaPoliKlinik" value="{{$poliKlinik->namaPoliKlinik}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop