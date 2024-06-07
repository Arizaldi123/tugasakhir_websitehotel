@extends('layouts.appadmin')
@section('title', 'Dashboard | Data Kamar')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Kamar</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Data Kamar</div>
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
                      <th>Jumlah Kamar</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach ($kamar as $k)                               
                    <tr>
                      <td>
                        {{ $loop->iteration }}
                      </td>
                      <td>{{ $k->tipe_kamar }}</td>
                      <td>{{ $k->jumlah_kamar }}</td>
                      <td><img src="/storage/{{ $k->gambar }}" alt="" width="100px"></td>
                      <td>
                        <a href="/kamar/{{$k->id}}/edit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form action="/kamar/{{$k->id}}" method="POST" class="d-inline">
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
                      <th>Jumlah Kamar</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach($kamar as $k)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $k->tipe_kamar }}</td>
                      <td>{{ $k->jumlah_kamar }}</td>
                      <td>
                        <a href="/kamar/{{$k->id}}/edit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form action="/kamar/{{$k->id}}" method="POST" class="d-inline">
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
          <h5 class="modal-title">Tambah Data Kamar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kamar" method="post" class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="tipe_kamar">Tipe Kamar</label>
              <input type="text" class="form-control @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar" name="tipe_kamar" value="{{ old('tipe_kamar') }}">
              @error('tipe_kamar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jumlah_kamar">Jumlah Kamar</label>
              <input type="number" min="1" class="form-control @error('jumlah_kamar') is-invalid @enderror" id="jumlah_kamar" name="jumlah_kamar" value="{{ old('jumlah_kamar') }}">
              @error('jumlah_kamar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}">
              @error('gambar')
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