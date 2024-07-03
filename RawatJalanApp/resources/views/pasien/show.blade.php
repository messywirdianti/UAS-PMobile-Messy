@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Pasien Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <tbody>
                                    <tr>
                                        <th>No Rekap Medis</th>
                                        <td>{{ $pasien->noRekapMedis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $pasien->namaPengguna }}</td>
                                    </tr>
                                    <tr>
                                        <th>No KTP</th>
                                        <td>{{ $pasien->noKTP }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $pasien->jekel }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $pasien->tempatLahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $pasien->tanggalLahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>NO BPJS</th>
                                        <td>{{ $pasien->noBPJS }}</td>
                                    </tr>
                                    <tr>
                                        <th>No Hp</th>
                                        <td>{{ $pasien->noHp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $pasien->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $pasien->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/pasien') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
