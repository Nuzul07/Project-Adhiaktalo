@extends('layouts.user')
@section('title')
Adhiakta Law Office
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('Sailor/assets/img/law.jpg')}})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Adhiakta Law Office</span></h2>
                        <p class="animate__animated animate__fadeInUp">Melayani anda dengan sampai tuntas</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Hero -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-12 col-md-9 d-flex align-items-stretch" data-aos="fade-up">
                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title text-center">
                        Visi
                    </h2>
                    <br>
                    @php
                    $dataV = \App\VisiMisi::where('tipe', 1)->get();
                    @endphp
                    @foreach ($dataV as $v)
                    <div class="entry-content text-center">
                        <p>
                            {{$v->isi}}
                        </p>
                    </div>
                    @endforeach
                </article><!-- End blog entry -->
            </div>
            <div class="col-lg-12 col-md-9" data-aos="fade-up">
                <article class="entry">
                    <h2 class="entry-title text-center">
                        Misi
                    </h2>
                    @php
                    $dataM = \App\VisiMisi::where('tipe', 2)->get();
                    @endphp
                    @foreach ($dataM as $m)
                    <div class="entry-content text-center">
                        <p style="white-space:pre-line;">
                            {{ $m->isi }}
                        </p>
                    </div>
                    @endforeach
                </article><!-- End blog entry -->
            </div>

        </div>

    </div>
</section><!-- End Blog Section -->
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2>Benefit</h2>
            <p>Kenapa anda memilih kami ?</p>
        </div>

        <div class="row">

            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog-6.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title text-center">
                        <a href="blog-single.html">BIAYA YANG FLEKSIBEL</a>
                    </h2>

                    <div class="entry-content text-center">
                        <p>
                            Untuk tarif atau biaya, kami tidak mematok harga jasa advokat kami. Hal itu bisa dinegosiasikan dan tentunya kami akan memberikan harga jasa pengacara murah dengan hasil yang maksimal dan memuaskan untuk anda.
                        </p>
                    </div>

                </article><!-- End blog entry -->
            </div>
            <div class="col-lg-4  col-md-6" data-aos="fade-up">
                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog-6.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title text-center">
                        <a href="blog-single.html">PARTNER & KONSULTAN HUKUM PROFESIONAL.</a>
                    </h2>

                    <div class="entry-content text-center">
                        <p>
                            Kantor Hukum Adhiakta didukung oleh partner lawyer dan konsultan hukum yang mampu bekerja secara profesional sebagai penyedia jasa pelayanan hukum kepada pihak - pihak yang memerlukan.
                        </p>
                        <br>
                    </div>

                </article><!-- End blog entry -->
            </div>
            <div class="col-lg-4  col-md-6" data-aos="fade-up">
                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog-6.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title text-center">
                        <a>PENANGANAN TERBAIK</a>
                    </h2>

                    <div class="entry-content text-center">
                        <p>
                            Karena kantor kami salah satu jasa pengacara penutupan Kartu Kredit yang dapat memberikan penanganan terbaik untuk membantu menyelesaikan permasalahan Kartu Kredit/KTA anda.
                        </p>
                        <br><br>
                    </div>

                </article><!-- End blog entry -->
            </div>

        </div>

    </div>
</section><!-- End Blog Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Dokumen</h2>
            <p>Sertifikat & Lisensi</p>
        </div>

        <div class="row portfolio-container">

            <?php
            $gallery = \App\Gallery::paginate(3);
            ?>
            @foreach ($gallery as $g)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <a href="{{URL::to('images/'.$g->gambar)}}"><img src="{{asset('images/'.$g->gambar)}}" class="img-fluid"></a>
            </div>
            @endforeach
        </div>
        <center>
            <a href="{{ url('gallery/seemore') }}" class="btn-sm btn-danger">Lihat Lebih Banyak</a>
        </center>
    </div>
</section>
@endsection
