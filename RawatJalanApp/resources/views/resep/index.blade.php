@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Resep Pasien</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/resep/create') }}" class="btn btn-success btn-sm" title="Add New resep">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Resep</th>
                                    <th>No Rekap Medis</th>
                                    <th>ID Dokter</th>
                                    <th>ID Obat</th>
                                    <th>keterangan</th>
                                </tr>
                                @foreach ($reseps as $resep)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{$resep->idResep}}</td>
                                    <td>{{$resep->pasien->namaPengguna}}</td>
                                    <td>{{$resep->Dokter->namaDokter}}</td>
                                    <td>{{$resep->Obat->namaObat}}</td>
                                    <td>{{$resep->keterangan}}</td>
                                    <td>
                                        <a href="{{ url('/resep/' . $resep->idResep . '/edit') }}" title="Edit Pasien">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                                <form method="POST" action="{{ url('/resep/' . $resep->idResep) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete resep" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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