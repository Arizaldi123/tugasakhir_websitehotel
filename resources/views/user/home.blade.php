@extends('layouts.appuser')
@section('title', 'Hotel Hebat | Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
        </div>
      </div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Dashboard') }}</div>
      
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
      
                          {{ __('Anda Telah Berhasil Login!') }}
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </section>
</div>

@endsection
