@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
  <div class="container">

  <div class="card">
<div class="card-header">
                        <h2>Edit Resep Pasien</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('resep/' .$resep->idResep) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="idResep" id="idResep" value="{{$resep->idResep}}" id="idResep" />

       <label>keterangan</label></br>
        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$resep->keterangan}}"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop