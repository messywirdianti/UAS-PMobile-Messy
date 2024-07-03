@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Pasien Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pasien/create') }}" class="btn btn-success btn-sm" title="Add New pasien">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>No Rekam Medis</th>
                                    <th>Nama</th>
                                    <th>No KTP</th>
                                    <!-- <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>NO BPJS</th>
                                    <th>No Hp</th> -->
                                    <th>Email</th>
                                    <!-- <th>Alamat</th> -->
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pasiens as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }} </td>
                                        <td>{{$item->noRekapMedis}}</td>
                                        <td>{{$item->namaPengguna}}</td>
                                        <td>{{$item->noKTP}}</td>
                                        <!-- <td>{{$item->jekel}}</td>
                                        <td>{{$item->tempatLahir}}</td>
                                        <td>{{$item->tanggalLahir}}</td>
                                        <td>{{$item->noBPJS}}</td>
                                        <td>{{$item->noHp}}</td> -->
                                        <td>{{$item->email}}</td>
                                        <!-- <td>{{$item->alamat}}</td> -->
                                        <td>

                                        <a href="{{ url('/pasien/' . $item->noRekapMedis) }}" title="Show Siswa">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button>
                                        </a>
                                            <a href="{{ url('/pasien/' . $item->noRekapMedis . '/edit') }}" title="Edit Pasien">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                    </a>
                                                        <form method="POST" action="{{ url('/pasien/' . $item->noRekapMedis) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pasien" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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