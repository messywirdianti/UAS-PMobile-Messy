@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Edit Apoteker</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('apoteker/' .$apoteker->idApoteker) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="idApoteker" id="idApoteker" value="{{$apoteker->idApoteker}}" id="idApoteker" />

        <label>Name Apoteker</label></br>
        <input type="text" name="namaApoteker" id="namaApoteker" value="{{$apoteker->namaApoteker}}" class="form-control"></br>
        
        <label>Jenis Kelamain</label></br>
        <select class="form-select" id="jekel" name="jekel" value="{{$apoteker->jekel}}">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$apoteker->email}}" class="form-control"></br>

        <label>No HP</label></br>
        <input type="text" name="noHp" id="noHp" value="{{$apoteker->noHp}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop