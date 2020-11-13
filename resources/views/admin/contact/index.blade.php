@extends('layouts.admin')
@section('title')
Contact
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/contact/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control stretch" name="alamat" rows="5">{!! $data->alamat !!}</textarea>
            </div>
            <div class="form-group">
                <label>Email</label>
                <textarea class="form-control stretch" name="email" rows="5">{!! $data->email !!}</textarea>
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <textarea class="form-control stretch" name="whatsapp" rows="5">{!! $data->whatsapp !!}</textarea>
            </div>
            <div class="form-group">
                <label>Telp</label>
                <textarea class="form-control stretch" name="telp" rows="5">{!! $data->telp !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
