@extends('layouts.admin')
@section('title')
Visi Misi
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Visi Misi</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/visimisi/visi/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            @foreach ($dataV as $v )
            <input type="hidden" name="id" value="{{$v->id}}">
            <div class="form-group">
                <label>Visi</label>
                <textarea class="form-control stretch" name="isi" rows="5">{!! $v->isi !!}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <form method="POST" action="{{url('AdHk-&-admin/visimisi/misi/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            @foreach ($dataM as $m)
            <input type="hidden" name="id" value="{{$m->id}}">
            <div class="form-group">
                <label>Misi</label>
                <textarea class="form-control stretch" name="isi" rows="5">{!! $m->isi !!}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
