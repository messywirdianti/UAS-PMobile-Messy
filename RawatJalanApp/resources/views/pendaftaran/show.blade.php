@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Pendaftaran Pasien Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <tbody>
                                    <tr>
                                        <th>ID Daftar</th>
                                        <td>{{ $pendaftaran->idDaftar }}</td>
                                    </tr>
                                    <tr>
                                        <th>No Rekap Medis</th>
                                        <td>{{ $pendaftaran->noRekapMedis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $pendaftaran->namaLengkap }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $pendaftaran->tempatLahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $pendaftaran->tanggalLahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $pendaftaran->jekel }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Kunjungan</th>
                                        <td>{{ $pendaftaran->tanggalKunjungan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Asal Rujukan</th>
                                        <td>{{ $pendaftaran->asalRujukan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Poli Tujuan</th>
                                        <td>{{ $pendaftaran->poliTujuan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dokter</th>
                                        <td>{{ $pendaftaran->dokter }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td>{{ $pendaftaran->pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>No Hp</th>
                                        <td>{{ $pendaftaran->noHp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{ $pendaftaran->agama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td>{{ $pendaftaran->kewarganegaraan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/pendaftaran') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
