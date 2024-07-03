@extends('layouts.main')
{{-- @extends('layout') --}}
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Apoteker</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/apoteker/create') }}" class="btn btn-success btn-sm" title="Add New apoteker">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table" style="color: black;">
                                <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>ID Apoteker</th>
                                    <th>Nama Apoteker</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($apoteker as $apoteker)
                                    <tr>
                                    <td>{{$loop->iteration }} </td>
                                    <td>{{$apoteker->idApoteker}}</td>
                                    <td>{{$apoteker->namaApoteker}}</td>
                                    <td>{{$apoteker->jekel}}</td>
                                    <td>{{$apoteker->email}}</td>
                                    <td>{{$apoteker->noHp}}</td>
                                        <td>
                                            <a href="{{ url('/apoteker/' . $apoteker->idApoteker . '/edit') }}" title="Edit Dokter">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                    </a>
                                                        <form method="POST" action="{{ url('/apoteker/' . $apoteker->idApoteker) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Apoteker" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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