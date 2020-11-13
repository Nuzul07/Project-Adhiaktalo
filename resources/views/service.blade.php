@extends('layouts.user')
@section('title')
Pelayanan
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Pelayanan</h2>
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li>Pelayanan</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Info</h2>
            <p>Program</p>
        </div>

        <div class="row">
            <div class="icon-box col-lg-12">
                <i class="icofont-hand-drawn-right"></i>
                @php
                $datap = \App\Service::select('judulp1','judulp2','judulp3','isip1','isip2','isip3')->get();
                @endphp
                @foreach ($datap as $p)
                <h4>{{$p->judulp1}}</h4>
                <p style="white-space: pre-line;">{{$p->isip1}}</p>
                <i class="icofont-hand-drawn-right"></i>
                <h4>{{$p->judulp2}}</h4>
                <p style="white-space: pre-line;">{{$p->isip2}}</p>
                <i class="icofont-hand-drawn-right"></i>
                <h4>{{$p->judulp3}}</h4>
                <p style="white-space: pre-line;">{{$p->isip3}}</p>
                @endforeach
            </div>
        </div>

    </div>
</section><!-- End Services Section -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Info</h2>
            <p>Proses</p>
        </div>

        <div class="row">
            <div class="icon-box col-lg-12">
                <i class="icofont-hand-drawn-right"></i>
                @php
                $dataps = \App\Service::select('judulps1','judulps2','judulps3','isips1')->get();
                @endphp
                @foreach ($dataps as $ps)
                <h4>{{$ps->judulps1}}</h4>
                <p style="white-space:pre-line;">
                    {{$ps->isips1}}
                </p>
                <i class="icofont-hand-drawn-right"></i>
                <h4>{{$ps->judulps2}}.</h4>
                <i class="icofont-hand-drawn-right"></i>
                <h4>{{$ps->judulps3}}</h4>
                @endforeach
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>FAQ</h2>
            <p style="white-space: pre-line;">Apakah Nanti Akan Ada Penagihan? Apakah Nanti Saya Akan Tetap Didatangi Debt.Kolektor?</p>
        </div>

        <div class="row">
            <div class="icon-box col-lg-12">
                <i class="icofont-info-circle"></i>
                <h4 style="white-space: pre-line;">Dalam kondisi seperti ini, pasti ada rasa was-was dan pikiran akan selalu bertanya apakah tagihan akan terus berjalan berikut bunga. Tapi Anda tidak perlu khawatir. Kami disini akan mengambil alih penanganan setiap tagihan dari pihak bank. Bagaimana caranya? Kami akan merubah alamat dan nomor kontak Anda langsung ke pihak bank secara komputerisasi. Jadi untuk penagihan selanjutnya akan dialamatkan ke alamat kantor kami. Begitu juga telepon dari pihak bank akan dialihkan ke nomor kami.
                    <br><br>
                    Sebagai bukti legalitas bahwa anda sudah menyerahkan kasus penyelesaian hutang Kartu Kredit / KTA macet Anda ke kami, maka kami akan memberikan copy Surat Kuasa yang menyatakan bahwa penanganan permasalahan Kartu Kredit / KTA Anda sudah dikuasakan kepada pihak kami sebagai Kuasa Hukum Anda. Selama proses berjalan, Anda tidak perlu pusing dan khawatir lagi untuk menanggapi tagihan dari pihak bank ataupun terror dari pihak debt. Kolektor, sehingga Anda dapat fokus bekerja, mencari dan mengumpulkan uang untuk program keringanan dari pihak bank.
                </h4>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Rules</h2>
            <p>Syarat - Syarat</p>
        </div>
        <div class="row">
            <div class="icon-box col-lg-12">
                <i class="icofont-attachment"></i>
                @php
                $datas = \App\Service::select('syarat')->get();
                @endphp
                @foreach ($datas as $s)
                <h4>Adapun beberapa syarat yang harus anda siapkan, yaitu :</h4>
                <p style="white-space: pre-line;">
                    {{$s->syarat}}
                </p>
                @endforeach
                <i class="icofont-info-circle"></i>
                <h4 style="font-size:15px; color:#D9232D;">note: bahwa kantor kami tidak transfer ke rekening pribadi melainkan ke rekening atas nama kantor dan juga sudah terdaftar di kantor pelayanan pajak.</h4>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
@endsection
