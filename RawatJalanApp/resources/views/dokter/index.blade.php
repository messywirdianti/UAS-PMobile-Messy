@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Dokter</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/dokter/create') }}" class="btn btn-success btn-sm" title="Add New pasien">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>idDokter</th>
                                    <th>Nama Dokter</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Spesialis</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dokters as $dokter)
                                    <tr>
                                    <td>{{$loop->iteration }} </td>
                                    <td>{{$dokter->idDokter}}</td>
                                    <td>{{$dokter->namaDokter}}</td>
                                    <td>{{$dokter->email}}</td>
                                    <td>{{$dokter->noHp}}</td>
                                    <td>{{$dokter->spesialis}}</td>
                                        <td>
                                            <a href="{{ url('/dokter/' . $dokter->idDokter . '/edit') }}" title="Edit Dokter">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                    </a>
                                                        <form method="POST" action="{{ url('/dokter/' . $dokter->idDokter) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Dokter" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection