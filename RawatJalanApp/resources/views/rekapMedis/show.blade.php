@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Rekap Medis Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <tbody>
                                    <tr>
                                        <th>ID Rekap Medis</th>
                                        <td>{{ $rekapMedis->idRekapMedis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <td>{{ $rekapMedis->pasien->namaPengguna }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <td>{{ $rekapMedis->Dokter->namaDokter}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Kunjungan</th>
                                        <td>{{ $rekapMedis->tanggalKunjungan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keluhan</th>
                                        <td>{{ $rekapMedis->keluhan }}</td>
                                    </tr>
                                    <tr>
                                        <th>diagnosa</th>
                                        <td>{{ $rekapMedis->diagnosa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tekanan Darah</th>
                                        <td>{{ $rekapMedis->tekananDarah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Suhu Tubuh</th>
                                        <td>{{ $rekapMedis->suhuTubuh }}</td>
                                    </tr>
                                    <tr>
                                        <th>Berat Badan</th>
                                        <td>{{ $rekapMedis->beratBadan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tinggi Badan</th>
                                        <td>{{ $rekapMedis->tinggiBadan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/rekapMedis') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
