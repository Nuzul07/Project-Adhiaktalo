@extends('layouts.user')
@section('title')
Kontak
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Kontak</h2>
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li>Kontak</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq52viJHzaS4RRmcu6D1po0Y&key=AIzaSyCsVBRO_u4B9RthDiAWNKP4q4Z3E1cYEac" frameborder="0" allowfullscreen></iframe>
        </div>
        <br><br>
        <div class="row">
            @php
            $data = \App\Contact::all();
            @endphp
            @foreach ($data as $c)
            <div class="col-md-8 ">
                <div class="info">
                    <div class="phone">
                        <i class="icofont-google-map"></i>
                        <h4>Lokasi:</h4>
                        <p style="white-space: pre-line;">{{$c->alamat}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="info">
                    <div class="phone">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p><a style="color:cornflowerblue;" href="https://mail.google.com/mail/?view=cm&source=mailto&to={{$c->email}}">{{$c->email}}</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 ">
                <div class="info">
                    <div class="phone">
                        <i class="icofont-whatsapp"></i>
                        <h4>Whatsapp:</h4>
                        <p><a style="color:cornflowerblue;" href="https://api.whatsapp.com/send?phone={{$c->whatsapp}}&text=Halo%20saya%20ingin%20bertanya%20tentang%20seputar%20penutupan%20kartu%20kredit%20dan%20KTA">{{$c->whatsapp}}</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info">
                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Phone:</h4>
                        <p style="white-space: pre;">{{$c->telp}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    </div>
</section><!-- End Contact Section -->
@endsection
