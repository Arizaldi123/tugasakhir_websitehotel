<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $pemesanan->nama_pemesan }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  {{-- <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="/assets/datatables/datatables.min.css">
  <link rel="stylesheet" href="/assets/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/datatables/css/select.bootstrap4.min.css">
   --}}
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
</head>

<body>

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
                                  No Telp : (804) 123-5432<br>
                                  Email   : admin@hotelhebat.com
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
                      
                  </div>
                      
              </div>
          </div>
      </div>
  </section>


  <script>
    window.addEventListener("load", window.print());    
  </script>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>
    
    <!-- JS Libraies -->
    {{-- <script src="node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="/assets/datatables/datatables.min.js"></script>
    <script src="/assets/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/datatables/js/datatables.select.min.js"></script>
    <script src="/assets/datatables/js/jquery-ui.min.js"></script>
    <script src="/assets/datatables/js/modules-datatables.js"></script> --}}
    
  
    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>
  
    <!-- Page Specific JS File -->
    <script src="/assets/js/page/index-0.js"></script>
    <script src="/assets/js/page/bootstrap-modal.js"></script>
  </body>
  </html>
  