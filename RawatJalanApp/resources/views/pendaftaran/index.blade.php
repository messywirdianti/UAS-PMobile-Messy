@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Pendaftaran Pasien</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pendaftaran/create') }}" class="btn btn-success btn-sm" title="Add New pendaftaran">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Daftar</th>
                                    <th>No Rekap Medis</th>
                                    <th>Nama</th>
                                    <!-- <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th> -->
                                    <th>Tanggal Kunjungan</th>
                                    <th>Asal Rujukan</th>
                                    <th>Poli Tujuan</th>
                                    <th>Dokter</th>
                                    <!-- <th>Pekerjaan</th>
                                    <th>No Hp</th>
                                    <th>Agama</th>
                                    <th>kewarganegaraan</th> -->
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pendaftarans as $pendaftaran)
                                    <tr>
                                        <td>{{ $loop->iteration }} </td>
                                        <td>{{$pendaftaran->idDaftar}}</td>
                                        <td>{{$pendaftaran->noRekapMedis}}</td>
                                        <td>{{$pendaftaran->namaLengkap}}</td>
                                        <!-- <td>{{$pendaftaran->tempatLahir}}</td>
                                        <td>{{$pendaftaran->tanggalLahir}}</td>
                                        <td>{{$pendaftaran->jekel}}</td> -->
                                        <td>{{$pendaftaran->tanggalKunjungan}}</td>
                                        <td>{{$pendaftaran->asalRujukan}}</td>
                                        <td>{{$pendaftaran->poliTujuan}}</td>
                                        <td>{{$pendaftaran->dokter}}</td>
                                        <!-- <td>{{$pendaftaran->pekerjaan}}</td>
                                        <td>{{$pendaftaran->noHp}}</td>
                                        <td>{{$pendaftaran->agama}}</td>
                                        <td>{{$pendaftaran->kewarganegaraan}}</td> -->
                                        <td>
                                        <a href="{{ url('/pendaftaran/' . $pendaftaran->idDaftar) }}" title="Show Siswa">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button>
                                        </a>
                                            <a href="{{ url('/pendaftaran/' . $pendaftaran->idDaftar . '/edit') }}" title="Edit Pasien">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                    </a>
                                                        <form method="POST" action="{{ url('/pendaftaran/' . $pendaftaran->idDaftar) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pendaftaran" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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