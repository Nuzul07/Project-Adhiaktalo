@extends('layouts.user')
@section('title')
Testimoni
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Testimoni</h2>
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li>Testimoni</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Portfolio Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">
            @php
            $test = \App\Testimoni::all();
            @endphp
            @foreach ($test as $t)
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ url('images/testimoni/'.$t->pic) }}" alt="" class="img-fluid">
                    </div>
                    <hr style="border-style: solid; border-color:#444444;">
                    <h2 class="entry-title">
                        <a>{{ $t->judul }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>{{ $t->name }}</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a><time>{{ date('d-m-Y', strtotime($t->date)) }}</time></a></li>
                        </ul>
                    </div>
                    <hr style="border-style: solid; border-color:#444444;">
                    <div class="entry-content">
                        <p style="white-space: pre-line;">
                            {{ $t->isi }}
                        </p>
                    </div>

                </article><!-- End blog entry -->

            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Blog Section -->
@endsection
