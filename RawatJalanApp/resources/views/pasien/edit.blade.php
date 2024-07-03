@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
  <div class="card">
<div class="card-header">
                        <h2>Edit Pasien</h2>
                    </div>
  <div class="card-body">
      
      <form action="{{ url('pasien/' .$pasien->noRekapMedis) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="noRekapMedis" id="noRekapMedis" value="{{$pasien->noRekapMedis}}" id="noRekapMedis" />

        <label>Name Pengguna</label></br>
        <input type="text" name="namaPengguna" id="namaPengguna" value="{{$pasien->namaPengguna}}" class="form-control"></br>

        <label>No KTP</label></br>
        <input type="text" name="noKTP" id="noKTP" class="form-control" value="{{$pasien->noKTP}}"></br>
       
        <label>Jenis Kelamain</label></br>
        <select class="form-select" id="jekel" name="jekel" value="{{$pasien->jekel}}">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>
        
        <label>Tempat Lahir</label></br>
        <input type="text" name="tempatLahir" id="tempatLahir" value="{{$pasien->tempatLahir}}" class="form-control"></br>

        <label>Tanggal Lahir</label></br>
        <input type="date" name="tanggalLahir" id="tanggalLahir" value="{{$pasien->tanggalLahir}}" class="form-control"></br>

        <label>No HP</label></br>
        <input type="text" name="noHp" id="noHp" value="{{$pasien->noHp}}" class="form-control"></br>

        <label>No BPJS</label></br>
        <input type="text" name="noBPJS" id="noBPJS" value="{{$pasien->noBPJS}}" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$pasien->email}}" class="form-control"></br>

        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$pasien->alamat}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop