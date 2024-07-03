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
                        <form method="POST" action="/poliKlinik">
                            @csrf
                            <div class="mb-3">
                                <label for="namaPoliKlinik" class="form-label">Poli Klinik</label>
                                <input type="text" class="form-control" id="namaPoliKlinik" name="namaPoliKlinik">
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