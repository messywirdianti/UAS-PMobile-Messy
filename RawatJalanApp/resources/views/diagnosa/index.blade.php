@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Diagnosa Pasien</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/diagnosa/create') }}" class="btn btn-success btn-sm" title="Add New diagnosa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Diagnosa</th>
                                    <th>NO Rekap Medis</th>
                                    <th>ID Dokter</th>
                                    <th>ID Poli Klinik</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($diagnosas as $diagnosa)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{$diagnosa->idDiagnosa}}</td>
                                    <td>{{$diagnosa->pasien->namaPengguna}}</td>
                                    <td>{{$diagnosa->Dokter->namaDokter}}</td>
                                    <td>{{$diagnosa->PoliKlinik->namaPoliKlinik}}</td>
                                    <td>{{$diagnosa->tanggalKunjungan}}</td>
                                    <td>{{$diagnosa->keterangan}}</td>
                                    <td>
                                        <a href="{{ url('/diagnosa/' . $diagnosa->idDiagnosa . '/edit') }}" title="Edit Pasien">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                                <form method="POST" action="{{ url('/diagnosa/' . $diagnosa->idDiagnosa) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete diagnosa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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