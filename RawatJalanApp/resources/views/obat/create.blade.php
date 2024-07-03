@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
<div class="card">
<div class="card-header">
    <h2>Create Obat Baru</h2>
</div>
                    <div class="card-body">
                        <form method="POST" action="/obat">
                            @csrf
                            <div class="mb-3">
                                <label for="namaObat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="namaObat" name="namaObat">
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                            
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-fw mr-2">Submit</button>
                                    <button class="btn btn-secondary btn-rounded btn-fw">Cancel</button>
                                </div>
                            </div>
                        </form>                        
                    </div>
            </div>
</div>
</div>
</div>
</div>
</div>
    
@stop