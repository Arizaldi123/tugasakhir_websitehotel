@extends('layouts.appadmin')
@section('title', 'Dashboard | Data Fasilitas Kamar')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Fasilitas Kamar</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Data Fasilitas Kamar</div>
        </div>
      </div>

      <button type="button" class="btn btn-icon icon-left btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i>
        Tambah Data
      </button>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th>
                        No
                      </th>
                      <th>Tipe Kamar</th>
                      <th>Nama Fasilitas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach ($fasilitas as $f)                               
                    <tr>
                      <td>
                        {{ $loop->iteration }}
                      </td>
                      <td>{{ $f->kamar->tipe_kamar }}</td>
                      <td>{{ $f->nama_fasilitas }}</td>
                      <td>
                        <a href="/fasilitas-kamar/{{$f->id}}/edit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form action="/fasilitas-kamar/{{$f->id}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

          {{-- <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped table-md">
                    <tr>
                      <th>No</th>
                      <th>Tipe Kamar</th>
                      <th>Nama Fasilitas</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach($fasilitas as $f)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $f->kamar->tipe_kamar }}</td>
                      <td>{{ $f->nama_fasilitas }}</td>
                      <td>
                        <a href="/fasilitas-kamar/{{$f->id}}/edit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form action="/fasilitas-kamar/{{$f->id}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td>
                      @endforeach
                    </tr>
                  </table>
              </div>
            </div>


              
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div> --}}
    </section>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Fasilitas Kamar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/fasilitas-kamar" method="post" class="forms-sample">
            @csrf
            <div class="form-group">
              <label for="tipe_kamar">Tipe Kamar</label>
              <select class="form-control @error('kamar_id') is-invalid @enderror" id="tipe_kamar" name="kamar_id">
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
            <div class="form-group">
              <label for="nama_fasilitas">Nama Fasilitas</label>
              <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas" value="{{ old('nama_fasilitas') }}">
              @error('nama_fasilitas')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection