@extends('layouts.appuser')
@section('title', 'Hotel Hebat | Invoice')

@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Invoice</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
          <div class="breadcrumb-item">Invoice</div>
        </div>
      </div>

        <section class="content">
          <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
          
                        <div class="invoice p-3 mb-3">
            
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                         Hotel Hebat
                                        <small class="float-right">{{ $pemesanan->created_at->toDateString() }}</small>
                                    </h4>
                                </div>
            
                            </div>
            
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    Dari :
                                    <address>
                                        <strong>Hotel Hebat</strong><br>
                                        No Telp : 0857-4607-2075<br>
                                        Email   : hotelhebat@gmail.com
                                    </address>
                                </div>
                            
                            <div class="col-sm-4 invoice-col">
                                Pemesan :
                                <address>
                                    <strong>{{ $pemesanan->nama_pemesan }}</strong><br>
                                    Nama Tamu : {{ $pemesanan->nama_tamu }}<br>
                                    No Telp   : {{ $pemesanan->no_telp }}<br>
                                    Email     : {{ $pemesanan->email }}
                                </address>
                            </div>
                            
                            <div class="col-sm-4 invoice-col">
                                <b>ID Pemesanan :</b> {{ $pemesanan->id }}<br>
                                <b>Tanggal Pemesanan :</b> {{ $pemesanan->created_at->toDateString() }}<br>
                                <b>Waktu Pemesanan :</b> {{ $pemesanan->created_at->toTimeString() }}
                            </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <div class="section-title">Detail Pemesanan</div>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Jumlah Kamar</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tanggal Check-in</th>
                                            <th>Tanggal Check-out</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $pemesanan->jumlah_kamar }}</td>
                                            <td>{{ $pemesanan->kamar->tipe_kamar }}</td>
                                            <td>{{ $pemesanan->tanggal_cek_in }}</td>
                                            <td>{{ $pemesanan->tanggal_cek_out }}</td>
                                            <td>{{ $pemesanan->status }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="row no-print">
                                <div class="col-12">
                                <a href="/invoice/{{ $pemesanan->id }}/print" rel="noopener" target="_blank" class="btn btn-warning float-right"><i class="fas fa-print"></i> Print</a>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>

@endsection