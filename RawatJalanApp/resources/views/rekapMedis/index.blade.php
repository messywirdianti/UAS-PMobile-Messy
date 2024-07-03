@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Rekap Medis Pasien</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/rekapMedis/create') }}" class="btn btn-success btn-sm" title="Add New rekapMedis">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Rekap Medis</th>
                                    <th>No Rekap Medis</th>
                                    <th>ID Dokter</th>
                                    <th>Tanggal Kunjungan</th>
                                    <!-- <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Tekanan Darah</th>
                                    <th>Suhu Tubuh</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th> -->
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($rekap_medis as $rekapMedis)
                                <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{$rekapMedis->idRekapMedis}}</td>
                                <td>{{$rekapMedis->pasien->namaPengguna}}</td>
                                <td>{{$rekapMedis->Dokter->namaDokter}}</td>
                                <td>{{$rekapMedis->tanggalKunjungan}}</td>
                                <!-- <td>{{$rekapMedis->keluhan}}</td>
                                <td>{{$rekapMedis->diagnosa}}</td>
                                <td>{{$rekapMedis->tekananDarah}}</td>
                                <td>{{$rekapMedis->suhuTubuh}}</td>
                                <td>{{$rekapMedis->beratBadan}}</td>
                                <td>{{$rekapMedis->tinggiBadan}}</td> -->
                                <td>

                                <a href="{{ url('/rekapMedis/' . $rekapMedis->idRekapMedis) }}" title="Show rekap medis">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button>
                                        </a>
                                        <a href="{{ url('/rekapMedis/' . $rekapMedis->idRekapMedis . '/edit') }}" title="Edit Pasien">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                                <form method="POST" action="{{ url('/rekapMedis/' . $rekapMedis->idRekapMedis) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete rekapMedis" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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