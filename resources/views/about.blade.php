@extends('layouts.user')
@section('title')
Tentang Kami
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Tentang Kami</h2>
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li>Tentang Kami</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row content">
            <div class="col-lg-6">
                <img src="{{ asset('Adhiakta(1).png') }}" style="width:100%; height:90%;" alt="img-fluid">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                @php
                $about = \App\About::all();
                @endphp
                @foreach($about as $a)
                <p>
                    {{ $a->pengantar1 }}
                </p>
                <h4>Manfaat Menggunakan Jasa Kami</h4>
                <ul>
                    <p style="white-space: pre-line;">{{$a->pengantar2}}</p>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p style="white-space: pre-line;">
                    {{ $a->pengantar3 }}
                </p>
            </div>
        </div>
        @endforeach


    </div>
</section><!-- End About Section -->
@endsection
