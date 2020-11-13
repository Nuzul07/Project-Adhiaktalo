@extends('layouts.admin')
@section('title')
Syarat
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Service / Syarat</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/service/syarat/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            @foreach ($datas as $s)
            <div class="form-group">
                <label>Syarat</label>
                <textarea class="form-control stretch" name="syarat" rows="10">{{$s->syarat}}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
