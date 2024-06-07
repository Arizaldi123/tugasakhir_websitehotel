@extends('layouts.app')

@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Kamar</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li class="active">Kamar</li>
            </ol>
        </div>
    </div>
</section>

<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Kamar</h2>
            <p>Berbagai Jenis Kamar Berdasarkan Kelas Untuk Kenyamanan Anda</p>
        </div>
        <div class="row mb_30">
            @foreach ($kamar as $k)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="/storage/{{ $k->gambar }}" alt="">
                        @if (Auth::check() && Auth::user()->role === 'user')
                        <a href="/pemesanan" class="btn theme_btn button_hover">Pesan</a>
                        @else
                        <a href="/login" class="btn theme_btn button_hover">Pesan</a>
                        @endif
                    </div>
                    <a href="#"><h4 class="sec_h4">{{ $k->tipe_kamar }}</h4></a>
                    @foreach ($fasilitasKamar->where('kamar_id', $k->id) as $fk)
                    {{-- <div class="col-lg-4 col-sm-6 mt-sm-30 typo-sec text-center"> --}}
                        <div class="details">
                            <div class="tags">
                                <h6 class="button_hover tag_btn">{{ $fk->nama_fasilitas }}</h6>
                            </div>
                        </div>
                    {{-- </div> --}}
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection