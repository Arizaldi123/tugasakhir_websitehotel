@extends('layouts.appuser')
@section('title', 'Hotel Hebat | Pemesanan')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pemesanan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
          <div class="breadcrumb-item">Pemesanan</div>
        </div>
      </div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <form action="/pemesanan" method="POST">
                      @csrf
                      <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                      <div class="form-row">
                          <div class="col-md-4">
                              <div class="form-group mb-3">
                                  <label for="">Tanggal Cek In</label>
                                  <input type="date" class="form-control @error('tanggal_cek_in') is-invalid @enderror" name="tanggal_cek_in" value="{{ old('tanggal_cek_in') }}">
                                  @error('tanggal_cek_in')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group mb-3">
                                  <label for="">Tanggal Cek Out</label>
                                  <input type="date" class="form-control @error('tanggal_cek_out') is-invalid @enderror" name="tanggal_cek_out" value="{{ old('tanggal_cek_out') }}">
                                  @error('tanggal_cek_out')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group mb-3">
                                  <label for="">Jumlah Kamar</label>
                                  <input type="number" class="form-control @error('jumlah_kamar') is-invalid @enderror" name="jumlah_kamar" min="1" placeholder="Jumlah Kamar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Kamar'" value="{{ old('jumlah_kamar') }}">
                                  @error('jumlah_kamar')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group mb-3">
                                  <label for="">Nama Pemesan</label>
                                  <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" name="nama_pemesan" placeholder="Nama Pemesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Pemesan'" value="{{ old('nama_pemesan') }}">
                                  @error('nama_pemesan')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          <div class="form-group mb-3">
                              <label for="">Email</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" value="{{ old('email') }}">
                              @error('email')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group mb-3">
                              <label for="">No Handphone</label>
                              <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" min="0" placeholder="No Handphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Handphone'" value="{{ old('no_telp') }}">
                              @error('no_telp')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Nama Tamu</label>
                              <input type="text" class="form-control @error('nama_tamu') is-invalid @enderror" name="nama_tamu" placeholder="Nama Tamu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Tamu'" value="{{ old('nama_tamu') }}">
                              @error('nama_tamu')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <label for="">Tipe Kamar</label>
                          <div class="input-group mb-3">
                                  <select class="form-control @error('kamar_id') is-invalid @enderror" name="kamar_id">
                                      <option value="" selected>Pilih Tipe Kamar</option>
                                      @foreach ($kamar as $k)
                                      <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                                      @endforeach
                                  </select> 
                                  @error('kamar_id')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror             
                          </div>
                      </div>
                      </div>
                          <div class="col-md-12 text-right">
                              <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

    </section>
</div>

@endsection
