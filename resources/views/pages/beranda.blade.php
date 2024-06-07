@extends('layouts.app')

@section('content')
<section class="banner_area mb-5">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>SELAMAT DATANG DI</h6>
                <h2>Hotel Hebat</h2><br>
                @if (Auth::check() && Auth::user()->role === 'user')
                    <a href="/pemesanan" class="btn theme_btn button_hover">Pesan Kamar Sekarang</a>
                 @else
                 <a href="/login" class="btn theme_btn button_hover">Pesan Kamar Sekarang</a>
                @endif
            </div>
        </div>
    </div>
</section>

<!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Tentang Kami</h2>
                        <p>Hotel Hebat terletak di pusat kota Jombang yang memberikan nuansa berbeda dengan konsep elegan, modern, dan stylish yang sangat cocok untuk liburan, pelancong bisnis, maupun keluarga. Kami memiliki 92 kamar, 1 restoran, dan 1 ruang pertemuan. Hotel Hebat berada di Jalan Wachid Hasyim Jombang Jawa Timur dekat dengan Stasiun Jombang dan Pusat Perbelanjaan yang wilayahnya sangat strategis</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
<!--================ About History Area  =================-->

     <!--================ Accomodation Area  =================-->
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
                            <img src="/storage/{{ $k->gambar }}" alt="" style="object-fit: cover">
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
    <!--================ Accomodation Area  =================-->

    <!--================ Latest Blog Area  =================-->
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
                            <img class="" src="/storage/{{ $fh->gambar }}" alt="post" style="object-fit: cover">
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