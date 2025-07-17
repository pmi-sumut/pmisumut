
@extends('layouts.main')
<link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
@section('seo')
@endsection

@section('content')
  <section class="page-title centred">
    <div class="bg-layer" style="background-image: url('{{ asset('assets/img/background/relawan.png') }}');"></div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb">
                <li><a href="index-2.html">{{ $page }}</a></li>
                <li>{{ $title }}</li>
            </ul>
            <h1>{{ $title }}</h1>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <p class="text-white pt-3">{{ $description }}</p>
              </div>
            </div>
        </div>
    </div>
  </section>

  <section class="service-style-five pt_120 pb_120">
      <div class="auto-container">
          <div class="inner-container">
              <div class="category-block-one">
                  <div class="inner-box">
                      <div class="bg-layer bg-layer-1" style="background-image: url('{{ asset('assets/img/background/mula.png') }}');"></div>
                      <span class="big-text">PMR Mula</span>
                      <div class="content-box">
                          <h2 class="mb-0">PMR Mula</h2>
                          <p class="mb-3">Untuk tingkat setara SD (sekolah dasar)</p>
                          <p class="fw-semibold fs-2 mb-5">1,265 Anggota</p>
                          <div class="btn-box"><a href="https://mis.pmi.or.id/pmi/anggota/register?jenis=1">Gabung Sekarang</a></div>
                      </div>
                  </div>
              </div>
              <div class="category-block-one">
                  <div class="inner-box">
                      <div class="bg-layer bg-layer-2" style="background-image: url('{{ asset('assets/img/background/madya.png') }}');"></div>
                      <span class="big-text">PMR Madya</span>
                      <div class="content-box">
                          <h2 class="mb-0">PMR Madya</h2>
                          <p class="mb-3">Untuk tingkat setara SMP (sekolah menengah pertama)</p>
                          <p class="fw-semibold fs-2 mb-5">1,265 Anggota</p>
                          <div class="btn-box"><a href="https://mis.pmi.or.id/pmi/anggota/register?jenis=2">Gabung Sekarang</a></div>
                      </div>
                  </div>
              </div>
              <div class="category-block-one">
                  <div class="inner-box">
                      <div class="bg-layer bg-layer-3" style="background-image: url('{{ asset('assets/img/background/wira.png') }}');"></div>
                      <span class="big-text">PMR Wira</span>
                      <div class="content-box">
                          <h2 class="mb-0">PMR Wira</h2>
                          <p class="mb-3">Untuk tingkat setara SMA (sekolah menengah atas)</p>
                          <p class="fw-semibold fs-2 mb-5">1,265 Anggota</p>
                          <div class="btn-box"><a href="https://mis.pmi.or.id/pmi/anggota/register?jenis=3">Gabung Sekarang</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>



@endsection

@section('script')
@endsection