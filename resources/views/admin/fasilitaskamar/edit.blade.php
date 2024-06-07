@extends('layouts.appadmin')
@section('title', 'Dashboard | Edit Fasilitas Kamar')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Fasilitas Kamar</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Edit Fasilitas Kamar</div>
        </div>
      </div>
    <form action="/fasilitas-kamar/{{ $fasilitas->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipe_kamar">Tipe Kamar</label>
            <select class="form-control @error('kamar_id') is-invalid @enderror" id="tipe_kamar" name="kamar_id">
              <option selected value="{{ $fasilitas->kamar->id }}">{{ $fasilitas->kamar->tipe_kamar }}</option>
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
          <div class="form-group">
            <label for="nama_fasilitas">Nama Fasilitas</label>
            <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas }}">
            @error('nama_fasilitas')
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