@extends('layouts.app')

@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Tentang Kami</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li class="active">Tentang Kami</li>
            </ol>
        </div>
    </div>
</section>

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

@endsection