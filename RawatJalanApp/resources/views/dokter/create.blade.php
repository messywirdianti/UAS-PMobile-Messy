@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')

<div class="content-body">
  <div class="container">
 
<div class="card">
<div class="card-header">
        <h2>Create Dokter</h2>
    </div>
                    <div class="card-body">
                        <form method="POST" action="/dokter">
                            @csrf
                            <div class="mb-3">
                                <label for="namaDokter" class="form-label">Nama Dokter</label>
                                <input type="text" class="form-control" id="namaDokter" name="namaDokter">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="noHp" class="form-label">No HP</label>
                                <input type="text" class="form-control" id="noHp" name="noHp">
                            </div>
                            <div class="mb-3">
                                <label for="spesialis" class="form-label">Spesialis</label>
                                <input type="text" class="form-control" id="spesialis" name="spesialis">
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