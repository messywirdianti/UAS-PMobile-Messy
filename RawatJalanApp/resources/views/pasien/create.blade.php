@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
<div class="card">
<div class="card-header">
    <h2>Create Pasien</h2>
</div>
                    <div class="card-body">
                        <form method="POST" action="/pasien">
                            @csrf
                            <div class="mb-3">
                                <label for="namaPengguna" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="namaPengguna" name="namaPengguna">
                            </div>
                            <div class="mb-3">
                                <label for="noKTP" class="form-label">NO KTP</label>
                                <input type="text" class="form-control" id="noKTP" name="noKTP">
                            </div>
                            <div class="mb-3">
                                <label for="jekel" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jekel" name="jekel">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div> 
                            <div class="mb-3">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                            </div>
                            <div class="mb-3">
                                <label for="noBPJS" class="form-label">NO BPJS</label>
                                <input type="text" class="form-control" id="noBPJS" name="noBPJS">
                            </div>
                            <div c@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
<div class="card">
<div class="card-header">
    <h2>Create Pasien</h2>
</div>
                    <div class="card-body">
                        <form method="POST" action="/pasien">
                            @csrf
                            <div class="mb-3">
                                <label for="namaPengguna" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="namaPengguna" name="namaPengguna">
                            </div>
                            <div class="mb-3">
                                <label for="noKTP" class="form-label">NO KTP</label>
                                <input type="text" class="form-control" id="noKTP" name="noKTP">
                            </div>
                            <div class="mb-3">
                                <label for="jekel" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jekel" name="jekel">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div> 
                            <div class="mb-3">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                            </div>
                            <div class="mb-3">
                                <label for="noBPJS" class="form-label">NO BPJS</label>
                                <input type="text" class="form-control" id="noBPJS" name="noBPJS">
                            </div>
                            <div class="mb-3">
                                <label for="noHp" class="form-label">NO HP</label>
                                <input type="text" class="form-control" id="noHp" name="noHp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label for="noRekamMedis" class="form-label">Nomor Rekam Medis</label>
                                <input type="text" class="form-control" id="noRekamMedis" name="noRekamMedis" value="{{ 'RM-' . strtoupper(Str::random(6)) }}" readonly>
                            </div>

                            <input type="submit" value="Save" class="btn btn-success"></br>
                    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    
@stop
lass="mb-3">
                                <label for="noHp" class="form-label">NO HP</label>
                                <input type="text" class="form-control" id="noHp" name="noHp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>

                            <input type="submit" value="Save" class="btn btn-success"></br>
                    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    
@stop