<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Resepsionis</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="/assets/datatables/datatables.min.css">
  <link rel="stylesheet" href="/assets/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/datatables/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('partial.navbarres')

      @include('partial.sidebarres')

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pemesanan Hotel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard-resepsionis">Dashboard</a></div>
              <div class="breadcrumb-item">Data Pemesanan Hotel</div>
            </div>
          </div>

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
                          <th>Nama Tamu</th>
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
                          <td>{{ $p->nama_tamu }}</td>
                          <td>{{ \Carbon\Carbon::parse( $p->tanggal_cek_in )->format('d-m-Y') }}</td>
                          <td>{{ \Carbon\Carbon::parse( $p->tanggal_cek_out )->format('d-m-Y') }}</td>
                          <td>
                            <form action="/status/{{ $p->id }}" method="POST">
                              @csrf
                              @if($p->status === 'booking')
                                  <input type="hidden" name="status" value="Check In">
                                  <button type="submit" class="btn btn-success">Check In</button>
                              @elseif($p->status === 'Check In')
                                  <input type="hidden" name="status" value="Check Out">
                                  <button type="submit" class="btn btn-danger">Check Out</button>
                              @endif
          
                            </form>
          
                            @if ($p->status === 'Check Out')
                                  <span class="btn btn-info">Selesai</span>                      
                            @endif
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
                      <th>Nama Tamu</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach($pemesanan as $p)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $p->nama_tamu }}</td>
                      <td>{{ \Carbon\Carbon::parse( $p->tanggal_cek_in )->format('d-m-Y')  }}</td>
                      <td>{{ \Carbon\Carbon::parse( $p->tanggal_cek_out )->format('d-m-Y')  }}</td>
                      <td>
                        <form action="/status/{{ $p->id }}" method="POST">
                          @csrf
                          @if($p->status === 'booking')
                              <input type="hidden" name="status" value="Check In">
                              <button type="submit" class="btn btn-success">Check In</button>
                          @elseif($p->status === 'Check In')
                              <input type="hidden" name="status" value="Check Out">
                              <button type="submit" class="btn btn-danger">Check Out</button>
                          @endif
      
                        </form>
      
                        @if ($p->status === 'Check Out')
                              <span class="btn btn-info">Selesai</span>                      
                        @endif
                      </td>
                    </tr>
                    @endforeach
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

      {{-- <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer> --}}
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="node_modulessimpleweatherjquery.simpleWeather.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="/assets/datatables/datatables.min.js"></script>
  <script src="/assets/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/datatables/js/datatables.select.min.js"></script>
  <script src="/assets/datatables/js/jquery-ui.min.js"></script>
  <script src="/assets/datatables/js/modules-datatables.js"></script>

  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="/assets/js/page/index-0.js"></script>
  <script src="/assets/js/page/bootstrap-modal.js"></script>
</body>
</html>