@extends('layouts.user')
@section('title')
Setifikat & Lisensi
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Setifikat & Lisensi</h2>
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li>Sertifikat & Lisensi</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row portfolio-container">

            <?php
            $gallery = \App\Gallery::all();
            ?>
            @foreach ($gallery as $g)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <a href="{{URL::to('images/'.$g->gambar)}}"><img src="{{asset('images/'.$g->gambar)}}" class="img-fluid"></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
