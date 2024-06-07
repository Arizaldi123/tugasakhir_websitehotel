@extends('layouts.appadmin')
@section('title', 'Dashboard | Edit Fasilitas Hotel')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Fasilitas Hotel</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Edit Fasilitas Hotel</div>
        </div>
      </div>
    <form action="/fasilitas-hotel/{{ $fasilitas->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="gambar_lama" value="{{ $fasilitas->gambar }}">
        <div class="form-group">
            <label for="nama_fasilitas">Nama Fasilitas</label>
            <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas }}">
            @error('nama_fasilitas')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $fasilitas->keterangan }}">
            @error('keterangan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
            @error('gambar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </section>
  </div>
  
  <!-- Modal -->
  {{-- <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kamar" method="post" class="forms-sample">
            @csrf
            <div class="form-group">
              <label for="tipe_kamar">Tipe Kamar</label>
              <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar">
            </div>
            <div class="form-group">
              <label for="jumlah_kamar">Jumlah Kamar</label>
              <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar">
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div> --}}
@endsection