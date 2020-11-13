@extends('layouts.admin')
@section('title')
Proses
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Service / Proses</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/service/proses/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            @foreach ($dataps as $s)
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulps1" rows="5">{{$s->judulps1}}</textarea>
            </div>
            <div class="form-group">
                <label>Isi Program</label>
                <textarea class="form-control stretch" name="isips1" rows="5">{{$s->isips1}}</textarea>
            </div>
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulps2" rows="5">{{$s->judulps2}}</textarea>
            </div>
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulps3" rows="5">{{$s->judulps3}}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
