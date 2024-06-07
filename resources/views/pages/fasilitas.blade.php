@extends('layouts.app')

@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Fasilitas Hotel</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li class="active">Fasilitas Hotel</li>
            </ol>
        </div>
    </div>
</section>

<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Fasilitas Hotel</h2>
        </div>
        <div class="row mb_30">
            @foreach ($fasilitasHotel as $fh)
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="/storage/{{ $fh->gambar }}" alt="post">
                    </div>
                    <div class="details">
                        <h4 class="sec_h4">{{ $fh->nama_fasilitas }}</h4>
                        <p>{{ $fh->keterangan }}</p>
                    </div>	
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection