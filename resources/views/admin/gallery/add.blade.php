@extends('layouts.admin')
@section('title')
Add Gallery
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Picture</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/gallery/store')}}" enctype="multipart/form-data">
            @csrf
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('no-image.png')}}" class="responsive" id="showpic" style="width: 200px;height: 200px;">
                </div>
            </center>
            <center>
                <div class="form-row" {{ $errors->has('gambar') ? 'has-error' : '' }}>
                    <div class="form-group col-md-12">
                        <input type="file" name="gambar" onchange="readURL1(this);">
                        <br>
                        <br>
                        <span>Note: Picture must be type: jpg,jpeg,png, and max size is 2MB.</span>
                        <br>
                        <span class="text-danger"> {{ $errors->first('gambar') }} </span>
                    </div>
            </center>
            <center>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </center>
        </form>
    </div>
</div>
@endsection
