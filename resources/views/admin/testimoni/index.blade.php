@extends('layouts.admin')
@section('title')
Testimoni
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Testimoni</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Picture</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($test as $t)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $t->judul }}</td>
                        <td class="text-center">{{ $t->name }}</td>
                        <td class="text-center">{{ $t->isi }}</td>
                        <td class="text-center">{{ date('j F, Y', strtotime($t->date)) }}</td>
                        <td class="text-center"><img src="{{ url('images/testimoni/'.$t->pic) }}" style="width: 100px; height: 100px"></td>
                        <td class="text-center"><a class="btn btn-warning" href="{{ url('AdHk-&-admin/testimoni/edit/'.$t->id) }}"><i class="fas fa-edit"></i></a></td>
                        <td><a class="btn btn-danger" href="{{ url('AdHk-&-admin/testimoni/destroy/'.$t->id) }}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{ url('AdHk-&-admin/testimoni/create') }}" class="btn btn-primary btn-circle float-right">
    <i class="fa fa-plus"></i>
</a>
@endsection
