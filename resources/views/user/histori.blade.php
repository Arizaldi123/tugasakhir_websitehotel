@extends('layouts.appuser')
@section('title', 'Hotel Hebat | Histori')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Histori Pemesanan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
          <div class="breadcrumb-item">Histori Pemesanan</div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                @if (session()->has('pesan'))
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      {{ session('pesan') }}
                    </div>
                </div>
              @endif
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th>
                        No
                      </th>
                      <th>Nama Pemesan</th>
                      <th>Tipe Kamar</th>
                      <th>Tanggal Check In</th>
                      <th>Tanggal Check Out</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach ($pemesanan as $p)                               
                    <tr>
                      <td>
                        {{ $loop->iteration }}
                      </td>
                      <td>{{ $p->nama_pemesan }}</td>
                      <td>{{ $p->kamar->tipe_kamar }}</td>
                      <td>{{ $p->tanggal_cek_in }}</td>
                      <td>{{ $p->tanggal_cek_out }}</td>
                      <td>
                          <a href="/invoice/{{ $p->id }}" class="btn btn-info">Cetak Struk</a>
                      </td>
                      {{-- <td>
                        <a href="/kamar/{{$k->id}}/edit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form action="/kamar/{{$k->id}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td> --}}
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
</div>
@endsection