@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Jadwal Dokter</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/jadwal/create') }}" class="btn btn-success btn-sm" title="Add New jadwal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" style="color: black;">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Jadwal</th>
                                    <th>ID Dokter</th>
                                    <th>ID Poli Klinik</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Aksi</th>
                                 </tr>
                            </thead>
                            <tbody>
                            @foreach ($jadwals as $jadwal)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{$jadwal->idJadwal}}</td>
                                <td>{{$jadwal->Dokter->namaDokter}}</td>
                                <td>{{$jadwal->PoliKlinik->namaPoliKlinik}}</td>
                                <td>{{$jadwal->jekel}}</td>
                                <td>{{$jadwal->jamMulai}}</td>
                                <td>{{$jadwal->jamSelesai}}</td>
                                <td>
                                    <a href="{{ url('/jadwal/' . $jadwal->idJadwal . '/edit') }}" title="Edit Pasien">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                        </a>
                                            <form method="POST" action="{{ url('/jadwal/' . $jadwal->idJadwal) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete jadwal" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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