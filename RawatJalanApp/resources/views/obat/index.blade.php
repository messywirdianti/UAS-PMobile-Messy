@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Obat</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/obat/create') }}" class="btn btn-success btn-sm" title="Add New obat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>idObat</th>
                                    <th>Nama Obat</th>
                                    <th>keterangan</th>
                                    <th>harga</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($obats as $obat)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{$obat->idObat}}</td>
                                    <td>{{$obat->namaObat}}</td>
                                    <td>{{$obat->keterangan}}</td>
                                    <td>{{$obat->harga}}</td>
                                    <td>
                                            <a href="{{ url('/obat/' . $obat->idObat . '/edit') }}" title="Edit Pasien">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                    </a>
                                                        <form method="POST" action="{{ url('/obat/' . $obat->idObat) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete obat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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