@extends('layouts.admin')
@section('title')
Program
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Service</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/service/program/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            @foreach ($datap as $p)
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulp1" rows="5">{{$p->judulp1}}</textarea>
            </div>
            <div class="form-group">
                <label>Isi Program</label>
                <textarea class="form-control stretch" name="isip1" rows="5">{{$p->isip1}}</textarea>
            </div>
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulp2" rows="5">{{$p->judulp2}}</textarea>
            </div>
            <div class="form-group">
                <label>Isi Program</label>
                <textarea class="form-control stretch" name="isip2" rows="5">{{$p->isip2}}</textarea>
            </div>
            <div class="form-group">
                <label>Judul Program</label>
                <textarea class="form-control stretch" name="judulp3" rows="5">{{$p->judulp3}}</textarea>
            </div>
            <div class="form-group">
                <label>Isi Program</label>
                <textarea class="form-control stretch" name="isip3" rows="5">{{$p->isip3}}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
