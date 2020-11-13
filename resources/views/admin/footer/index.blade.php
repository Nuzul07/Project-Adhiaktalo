@extends('layouts.admin')
@section('title')
Footer
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Footer</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('AdHk-&-admin/footer/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Pengantar 1</label>
                <textarea class="form-control stretch" name="pengantar1" rows="5">{!! $foot->pengantar1 !!}</textarea>
            </div>
            <div class="form-group">
                <label>Pengantar2</label>
                <textarea class="form-control stretch" name="pengantar2" rows="5">{!! $foot->pengantar2 !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
