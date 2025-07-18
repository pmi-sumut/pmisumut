
@extends('layouts.main')

@section('seo')
@endsection

@section('content')
  <section class="banner-section p_relative">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
      @foreach ($slider as $item)
        <div class="slide-item p_relative">
          <div class="bg-layer" style="background-image: url('{{ CmsAsset::url($item->image) }}');"></div>
          <div class="auto-container">
            <div class="content-box">
              <h2>{{ $item->title }}</h2>
              <p>{{ $item->description }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="about-section pt_120 ">
      <div class="auto-container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                  <div class="image_block_three">
                      <div class="image-box mr_40 pr_70">
                          <figure class="image"><img src="{{ CmsAsset::url($identities->about_photo) }}" alt=""></figure>
                          <div class="funfact-inner clearfix r_0">
                              <div class="funfact-block">
                                  <div class="count-outer">
                                    {{ $identities->about_name }}
                                  </div>
                                  <p>{{ $identities->about_description }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                  <div class="content_block_one">
                      <div class="content-box ml_50">
                          <div class="sec-title mb_30">
                              <span class="sub-title mb_12">Tentang Kami</span>
                              <h2>{{ $identities->title }}</h2>
                          </div>
                          <div class="tabs-box">
                              <div class="tab-btn-box">
                                  <div class="tab-btns tab-buttons">
                                      <div class="tab-btn" data-tab="#tab-1">Kata Sambutan</div>
                                      <div class="tab-btn active-btn" data-tab="#tab-2">Visi & Misi</div>
                                      <div class="tab-btn" data-tab="#tab-3">Tujuan</div>
                                  </div>
                              </div>
                              <div class="tabs-content">
                                  <div class="tab" id="tab-1">
                                      <div class="inner-box">
                                        {!! $identities->welcome_speech !!}
                                      </div>
                                  </div>
                                  <div class="tab  active-tab" id="tab-2">
                                      <div class="inner-box">
                                        {!! $identities->vision_mission !!}
                                      </div>
                                  </div>
                                  <div class="tab" id="tab-3">
                                      <div class="inner-box">
                                          {!! $identities->goals !!}
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="funfact-style-three pl_100 pr_100 pt_100">
      <div class="pattern-layer" style="background-image: url('{{ asset('assets/img/shape/shape-8.png') }}')"></div>
      <div class="auto-container">
          <div class="inner-container">
              <div class="row clearfix">
                  <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <a href="{{ route('relawan.palang-merah-remaja') }}">
                      <div class="funfact-block-three">
                          <div class="inner-box">
                              <div class="icon-box"><i class="icon-38"></i></div>
                              <div class="inner">
                                  <div class="count-outer">
                                      <span class="odometer odometer-auto-theme" data-count="12436"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span><span class="symble"></span>
                                  </div>
                                  <p>Palang Merah Remaja</p>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <a href="{{ route('relawan.korps-sukarela') }}">
                      <div class="funfact-block-three">
                          <div class="inner-box">
                              <div class="icon-box"><i class="icon-38"></i></div>
                              <div class="inner">
                                  <div class="count-outer">
                                      <span class="odometer odometer-auto-theme" data-count="1652"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span><span class="symble"></span>
                                  </div>
                                  <p>Korps Sukarela</p>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <a href="{{ route('relawan.tenaga-sukarela') }}">
                      <div class="funfact-block-three">
                          <div class="inner-box">
                              <div class="icon-box"><i class="icon-38"></i></div>
                              <div class="inner">
                                  <div class="count-outer">
                                      <span class="odometer odometer-auto-theme" data-count="595"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span><span class="symble"></span>
                                  </div>
                                  <p>Tenaga Sukarela</p>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="service-section pt_120 pb_90">
      <div class="auto-container">
          <div class="sec-title mb_50 centred">
              <span class="sub-title mb_12">Donor Darah</span>
              <h2>Informasi Donor Darah</h2>
          </div>
          <div class="tabs-box">
              <div class="tab-btn-box">
                  <div class="tab-btns tab-buttons clearfix">
                      <div class="tab-btn active-btn" data-tab="#tab-4">Unit Donor Darah</div>
                      <div class="tab-btn" data-tab="#tab-5">Stok Darah</div>
                      <div class="tab-btn" data-tab="#tab-6">Jadwal Mobile Unit</div>
                      <div class="tab-btn" data-tab="#tab-7">F.A.Q</div>
                  </div>
              </div>
              <div class="tabs-content">
                  <div class="shape" style="background-image: url('{{ asset('assets/img/background/bg-donor.png') }}')"></div>
                  
                  <div class="tab active-tab" id="tab-4">
                      <div class="row align-items-center">
                          <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                              <div class="row">
                                  <h2 class="mb-0">Unit Donor Darah</h2>
                                  <p class="fs-5 fw-semibold mb-0 mt-2">PMI Provinsi Sumatera Utara</p>
                                  <div class="col-md-12 col-lg-6 mt-3" style="max-height: 500px; overflow-y: auto;">
                                    <a href="#" class="feature-block-one">
                                        <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                            <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-add fs-1" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                              </svg>
                                            </div>
                                            <div>
                                                <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill text-danger" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                    </svg>
                                                    <small>(061) 6621918</small>
                                                </div>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                    </svg>
                                                    <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="feature-block-one">
                                        <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                            <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-add fs-1" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                              </svg>
                                            </div>
                                            <div>
                                                <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill text-danger" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                    </svg>
                                                    <small>(061) 6621918</small>
                                                </div>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                    </svg>
                                                    <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="feature-block-one">
                                        <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                            <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-add fs-1" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                              </svg>
                                            </div>
                                            <div>
                                                <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill text-danger" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                    </svg>
                                                    <small>(061) 6621918</small>
                                                </div>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                    </svg>
                                                    <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="feature-block-one">
                                        <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                            <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-add fs-1" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                              </svg>
                                            </div>
                                            <div>
                                                <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill text-danger" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                    </svg>
                                                    <small>(061) 6621918</small>
                                                </div>
                                                <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                    </svg>
                                                    <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                  </div>
                                  <div class="col-md-12 col-lg-6">

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab" id="tab-5">
                      <div class="row align-items-center">
                          <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                              <div class="content-box">
                                  <div class="row">
                                      <h2 class="mb-0">Stok Darah</h2>
                                      <div class="col-lg-9 col-md-7 col-12">
                                          <p class="fs-5 fw-semibold mb-0 mt-2">UDD PMI Kota Medan</p>
                                          <p>(061) 6621918 | Jl. Perintis Kemerdekaan No.37 Medan</p>
                                      </div>
                                      <div class="col-lg-3 col-md-5 col-12 justify-content-end align-items-end">
                                          <div class="select-box mb-3 mb-md-0 mt-lg-4">
                                              <select class="wide">
                                                  <option value="1" selected>UDD PMI Kota Medan</option>
                                                  <option value="2">Air Ambulance</option>
                                                  <option value="3">Water Ambulance</option>
                                                  <option value="4">Emergency Medical</option>
                                                  <option value="5">Road Accident</option>
                                                  <option value="6">ICU Ambulance</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="table-responsive">
                                          <table class="table table-striped table-bordered">
                                              <thead class="bg-danger text-white">
                                                  <tr>
                                                      <th scope="col" class="text-center">Produk</th>
                                                      <th scope="col">Rhesus</th>
                                                      <th scope="col">A</th>
                                                      <th scope="col">B</th>
                                                      <th scope="col">AB</th>
                                                      <th scope="col">O</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <!-- WB -->
                                                  <tr>
                                                      <th scope="row" rowspan="2" class="align-middle text-center">WB</th>
                                                      <td>Positif</td>
                                                      <td>24</td>
                                                      <td>20</td>
                                                      <td>6</td>
                                                      <td>24</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Negatif</td>
                                                      <td>2</td>
                                                      <td>1</td>
                                                      <td>1</td>
                                                      <td>1</td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row" rowspan="2" class="align-middle text-center">PRC</th>
                                                      <td>Positif</td>
                                                      <td>248</td>
                                                      <td>275</td>
                                                      <td>33</td>
                                                      <td>242</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Negatif</td>
                                                      <td>0</td>
                                                      <td>0</td>
                                                      <td>0</td>
                                                      <td>0</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                      <p class="mb-0">Update pada : <strong class="text-dark">02 july 2012 13:59</strong></p>
                                      <small class="text-danger">*Jumlah Stok Darah dapat berubah sewaktu-waktu, untuk Info stok darah terkini silahkan menghubungi UTD terkait</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab" id="tab-6">
                    <div class="row align-items-center">
                      <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="row">
                          <h2 class="mb-0">Jadwal Mobile Unit</h2>
                          <div class="col-lg-8 col-md-7 col-12">
                            <p class="fs-5 fw-semibold mb-0 mt-2">UDD PMI Kota Medan</p>
                            <p>(061) 6621918 | Jl. Perintis Kemerdekaan No.37 Medan</p>
                          </div>
                          <div class="col-lg-4 col-md-5 col-12 justify-content-end align-items-end">
                            <div class="select-box mb-3 mb-md-0 mt-lg-4 d-md-flex flex-md-column flex-lg-row gap-3 justify-content-end mt-3 mt-md-0">
                              <select class="wide">
                                <option value="1" selected>UDD PMI Kota Medan</option>
                                <option value="2">Air Ambulance</option>
                                <option value="3">Water Ambulance</option>
                                <option value="4">Emergency Medical</option>
                                <option value="5">Road Accident</option>
                                <option value="6">ICU Ambulance</option>
                              </select>
                              <input type="date" class="text-secondary fs-6">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 mt-3" style="max-height: 500px; overflow-y: auto;">
                            <a href="#" class="feature-block-one">
                                <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                    <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                      <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M185.2 512.6l-46.4-18.7 68.3-169c3-17 17.9-29.9 35.9-29.9h186v50H253l-67.8 167.6zM247.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S181.7 624 247.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2zM728.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S662.7 624 728.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2z"  />
                                        <path d="M320.2 323.4c-15.8 0-28.8-13-28.8-28.8v-25.8c0-15.8 13-28.8 28.8-28.8s28.8 13 28.8 28.8v25.8c0.1 15.8-12.9 28.8-28.8 28.8zM323.1 681.2H433V735H323.1zM185.3 681.2h-71.5V573.9c0-13.3 6.2-26.3 17.4-36.3 12.7-11.5 29.9-17.8 48.4-17.8h251.6V466H179.6c-29.4 0-57.3 10.5-78.6 29.7-22.7 20.5-35.2 48.3-35.2 78.2V735h113.7l5.8-53.8z"  />
                                        <path d="M911.8 155H430.9c-25.8 0-46.8 22.2-46.8 49.5v501c0 27.3 21 49.5 46.8 49.5h203.8v-55H436.1V210h470.6v490H799.9v55h111.9c25.8 0 46.8-22.2 46.8-49.5v-501c0-27.3-21-49.5-46.8-49.5z"  />
                                        <path d="M677.1 274c-80 0-144.7 64.7-144.7 144.7 0 80 64.7 144.7 144.7 144.7s144.7-64.7 144.7-144.7c0-80-64.8-144.7-144.7-144.7z m80.7 167.7h-59.2v59.2h-47.7v-59.2h-59.2V394h59.2v-59.2h47.7V394h59.2v47.7z"  />
                                      </svg>
                                    </div>
                                    <div>
                                        <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                        <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                          <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="feature-block-one">
                                <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                    <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                      <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M185.2 512.6l-46.4-18.7 68.3-169c3-17 17.9-29.9 35.9-29.9h186v50H253l-67.8 167.6zM247.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S181.7 624 247.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2zM728.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S662.7 624 728.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2z"  />
                                        <path d="M320.2 323.4c-15.8 0-28.8-13-28.8-28.8v-25.8c0-15.8 13-28.8 28.8-28.8s28.8 13 28.8 28.8v25.8c0.1 15.8-12.9 28.8-28.8 28.8zM323.1 681.2H433V735H323.1zM185.3 681.2h-71.5V573.9c0-13.3 6.2-26.3 17.4-36.3 12.7-11.5 29.9-17.8 48.4-17.8h251.6V466H179.6c-29.4 0-57.3 10.5-78.6 29.7-22.7 20.5-35.2 48.3-35.2 78.2V735h113.7l5.8-53.8z"  />
                                        <path d="M911.8 155H430.9c-25.8 0-46.8 22.2-46.8 49.5v501c0 27.3 21 49.5 46.8 49.5h203.8v-55H436.1V210h470.6v490H799.9v55h111.9c25.8 0 46.8-22.2 46.8-49.5v-501c0-27.3-21-49.5-46.8-49.5z"  />
                                        <path d="M677.1 274c-80 0-144.7 64.7-144.7 144.7 0 80 64.7 144.7 144.7 144.7s144.7-64.7 144.7-144.7c0-80-64.8-144.7-144.7-144.7z m80.7 167.7h-59.2v59.2h-47.7v-59.2h-59.2V394h59.2v-59.2h47.7V394h59.2v47.7z"  />
                                      </svg>
                                    </div>
                                    <div>
                                        <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                        <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                          <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="feature-block-one">
                                <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                    <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                      <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M185.2 512.6l-46.4-18.7 68.3-169c3-17 17.9-29.9 35.9-29.9h186v50H253l-67.8 167.6zM247.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S181.7 624 247.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2zM728.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S662.7 624 728.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2z"  />
                                        <path d="M320.2 323.4c-15.8 0-28.8-13-28.8-28.8v-25.8c0-15.8 13-28.8 28.8-28.8s28.8 13 28.8 28.8v25.8c0.1 15.8-12.9 28.8-28.8 28.8zM323.1 681.2H433V735H323.1zM185.3 681.2h-71.5V573.9c0-13.3 6.2-26.3 17.4-36.3 12.7-11.5 29.9-17.8 48.4-17.8h251.6V466H179.6c-29.4 0-57.3 10.5-78.6 29.7-22.7 20.5-35.2 48.3-35.2 78.2V735h113.7l5.8-53.8z"  />
                                        <path d="M911.8 155H430.9c-25.8 0-46.8 22.2-46.8 49.5v501c0 27.3 21 49.5 46.8 49.5h203.8v-55H436.1V210h470.6v490H799.9v55h111.9c25.8 0 46.8-22.2 46.8-49.5v-501c0-27.3-21-49.5-46.8-49.5z"  />
                                        <path d="M677.1 274c-80 0-144.7 64.7-144.7 144.7 0 80 64.7 144.7 144.7 144.7s144.7-64.7 144.7-144.7c0-80-64.8-144.7-144.7-144.7z m80.7 167.7h-59.2v59.2h-47.7v-59.2h-59.2V394h59.2v-59.2h47.7V394h59.2v47.7z"  />
                                      </svg>
                                    </div>
                                    <div>
                                        <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                        <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                          <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="feature-block-one">
                                <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                    <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                      <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M185.2 512.6l-46.4-18.7 68.3-169c3-17 17.9-29.9 35.9-29.9h186v50H253l-67.8 167.6zM247.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S181.7 624 247.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2zM728.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S662.7 624 728.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2z"  />
                                        <path d="M320.2 323.4c-15.8 0-28.8-13-28.8-28.8v-25.8c0-15.8 13-28.8 28.8-28.8s28.8 13 28.8 28.8v25.8c0.1 15.8-12.9 28.8-28.8 28.8zM323.1 681.2H433V735H323.1zM185.3 681.2h-71.5V573.9c0-13.3 6.2-26.3 17.4-36.3 12.7-11.5 29.9-17.8 48.4-17.8h251.6V466H179.6c-29.4 0-57.3 10.5-78.6 29.7-22.7 20.5-35.2 48.3-35.2 78.2V735h113.7l5.8-53.8z"  />
                                        <path d="M911.8 155H430.9c-25.8 0-46.8 22.2-46.8 49.5v501c0 27.3 21 49.5 46.8 49.5h203.8v-55H436.1V210h470.6v490H799.9v55h111.9c25.8 0 46.8-22.2 46.8-49.5v-501c0-27.3-21-49.5-46.8-49.5z"  />
                                        <path d="M677.1 274c-80 0-144.7 64.7-144.7 144.7 0 80 64.7 144.7 144.7 144.7s144.7-64.7 144.7-144.7c0-80-64.8-144.7-144.7-144.7z m80.7 167.7h-59.2v59.2h-47.7v-59.2h-59.2V394h59.2v-59.2h47.7V394h59.2v47.7z"  />
                                      </svg>
                                    </div>
                                    <div>
                                        <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                        <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                          <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="feature-block-one">
                                <div class="inner-box d-flex flex-column flex-md-row p-4 p-md-3">
                                    <div class="icon-box d-flex align-items-center justify-content-center ms-2">
                                      <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M185.2 512.6l-46.4-18.7 68.3-169c3-17 17.9-29.9 35.9-29.9h186v50H253l-67.8 167.6zM247.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S181.7 624 247.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2zM728.4 862.4c-65.7 0-119.2-53.5-119.2-119.2S662.7 624 728.4 624s119.2 53.5 119.2 119.2-53.5 119.2-119.2 119.2z m0-188.3c-38.1 0-69.2 31-69.2 69.2s31 69.2 69.2 69.2 69.2-31 69.2-69.2-31-69.2-69.2-69.2z"  />
                                        <path d="M320.2 323.4c-15.8 0-28.8-13-28.8-28.8v-25.8c0-15.8 13-28.8 28.8-28.8s28.8 13 28.8 28.8v25.8c0.1 15.8-12.9 28.8-28.8 28.8zM323.1 681.2H433V735H323.1zM185.3 681.2h-71.5V573.9c0-13.3 6.2-26.3 17.4-36.3 12.7-11.5 29.9-17.8 48.4-17.8h251.6V466H179.6c-29.4 0-57.3 10.5-78.6 29.7-22.7 20.5-35.2 48.3-35.2 78.2V735h113.7l5.8-53.8z"  />
                                        <path d="M911.8 155H430.9c-25.8 0-46.8 22.2-46.8 49.5v501c0 27.3 21 49.5 46.8 49.5h203.8v-55H436.1V210h470.6v490H799.9v55h111.9c25.8 0 46.8-22.2 46.8-49.5v-501c0-27.3-21-49.5-46.8-49.5z"  />
                                        <path d="M677.1 274c-80 0-144.7 64.7-144.7 144.7 0 80 64.7 144.7 144.7 144.7s144.7-64.7 144.7-144.7c0-80-64.8-144.7-144.7-144.7z m80.7 167.7h-59.2v59.2h-47.7v-59.2h-59.2V394h59.2v-59.2h47.7V394h59.2v47.7z"  />
                                      </svg>
                                    </div>
                                    <div>
                                        <h3 class="fs-5">UDD PMI Kota Medan</h3>
                                        <div class="text-secondary d-block p-0 m-0 d-flex gap-2 align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                          <small>Jl. Perintis Kemerdekaan No.37 Medan</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-12 col-lg-6">
  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab" id="tab-7">
                    <div class="row align-items-center">
                      <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content-box fluid-section bg-transparent">
                          <h2 class="mb-0">F.A.Q</h2>
                          <p class="fs-5 fw-semibold mb-0 mt-2">Frequently Asked Questions</p>
                          <div class="faq-content mt-3">
                            <ul class="accordion-box">
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Mengapa Harus Bayar Saat Kita Butuh Darah dari PMI ?</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content" style="">
                                  <div class="text">
                                    <p>Biaya yang kita keluarkan perkantong darah sebenarnya adalah biaya penggantian pemeliharaan darah, supaya kondisinya tetap sama seperti saat berada dalam tubuh kita. Biaya ini yang kita kenal dgn nama "BPPD" atau Biaya Penggantian Pengelolaan Darah.</p>
                                  </div>
                                </div>
                              </li>
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Apa syarat-syarat untuk mendonorkan darah ?</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                  <div class="text">
                                    <p>Sehat jasmani dan rohani; Usia 17 sampai dengan 60 tahun dan Sampai 65 tahun untuk pendonor darah yang sudah rutin mendonorkan darahnya sampai akhirnya berhenti atas pertimbangan dokter; Berat badan minimal 45 Kg; Tekanan darah normal (Sistole 100 - 180 dan Diastole 70 - 100); Kadar haemoglobin 12,5-17,0 gr/dL%; Demi keamanan dan keselamatan pendonor sesuai dengan PERMENKES 91 Tahun 2015 interval waktu sejak donor darah terkahir minimal 2 bulan.</p>
                                  </div>
                                </div>
                              </li>
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Apa Yang Harus Kita Persiapkan Sebelum Donor ?</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                  <div class="text">
                                    <p>Kita memerlukan tidur yang nyenyak di malam sebelum mendonor, sarapan pagi atau makan siang sebelum mendonor. Banyak minum seperti jus, susu sebelum mendonor. Rileks saat mendonor, dan banyak minum setelah mendonor. Kita bisa melanjutkan kegiatan setelah mendonor, asal hindari aktivitas fisik yang berat.</p>
                                  </div>
                                </div>
                              </li>
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Apakah dengan Donor Darah dapat menyehatkan ?</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                  <div class="text">
                                    <p>Ya, Bila seseorang mendonorkan darahnya, tubuhnya akan menggantikan volume darah dalam waktu 48 jam setelah donor, dan semua sel darah merah yang hilang akan benar-benar diganti dalam waktu empat sampai delapan minggu dengan sel-sel darah merah yang baru. Proses pembentukan sel-sel darah merah yang baru akan membantu tubuh tetap sehat dan bekerja lebih efisien dan produktif.</p>
                                  </div>
                                </div>
                              </li>
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Jangan menyumbangkan darah jika :</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                  <div class="text">
                                    <p>Mempunyai penyakit jantung dan paru; menderita kanker; menderita tekanan darah tinggi (hipertensi); menderita kencing manis (diabetes militus); memiliki kecenderungan perdarahan abnormal atau kelainan darah lainnya; menderita epilepsi dan sering kejang; menderita atau pernah menderita hepatitis B atau C; mengidap sifilis; ketergantungan narkoba; kecanduan minuman beralkohol; mengidap atau beresiko tinggi terhadap HIV/AIDS; dokter menyarankan untuk tidak menyubangkan darah karena alasan kesehatan;</p>
                                  </div>
                                </div>
                              </li>
                              <li class="accordion block">
                                <div class="acc-btn">
                                  <h4>Kenapa Ketika Membutuhkan Darah Prosesnya Lama ?</h4>
                                  <div class="icon-box"><i class="icon-27"></i></div>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                  <div class="text">
                                    <p>Proses permintaan darah transfusi di Palang Merah Indonesia (PMI) memerlukan proses "Crossmatch" yaitu uji serasi silang antara darah pasien dengan darah donor yang diberikan. Crossmatch ini bertujuan untuk melihat apakah darah pasien sesuai dengan darah donor sehingga tidak ada efek yang merugikan pasien transfusi darah tersebut.Secara keseluruhan darah pendonor baru siap diberikan kepada seseorang itu butuh waktu paling lama sekitar 3 jam</p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="chooseus-section centred pt_120 pb_90">
      <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url('{{ asset('assets/img/background/pmisu.jpg') }}');"></div>
      <div class="auto-container">
          <div class="sec-title centred light mb_50">
              <span class="sub-title mb_12">Layanan</span>
              <h2>Layanan Kami</h2>
          </div>
          <div class="row clearfix justify-content-center">
            @foreach ($service as $item)
              <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                  <div class="chooseus-block-one">
                      <div class="inner-box">
                          <div class="d-flex justify-content-center">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                              <img src="{{ CmsAsset::url($item->icon) }}" height="20px" alt="">
                            </div>
                          </div>
                          <h3><a href="index-2.html">{{ $item->title }}</a></h3>
                          <p>{{ $item->description }}</p>
                          <div class="btn-box"><a href="{{ $item->cta_url }}" class="theme-btn btn-one">Selengkapnya</a></div>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>

  <section class="feature-style-three pt_120 pb_90 bg-light">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-12">
                  <div class="alert alert-warning alert-dismissible p-4 fade show rounded-4" role="alert">
                      <strong class="d-flex align-items-center gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                          </svg>
                          Peringatan Dini Cuaca Sumatera Utara
                      </strong> 
                      <small class="d-block py-2">UPDATE Peringatan Dini Cuaca Wilayah Sumatera Utara tgl 12 Juli 2025 pkl. 15:00 WIB berpotensi terjadi hujan dengan intensitas sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang pada pkl 15:30 WIB. Kondisi ini diperkirakan masih dapat berlangsung hingga pkl 18:30 WIB\n\nPrakirawan BMKG - Sumatera Utara\nhttps://nowcasting.bmkg.go.id\n\n</small>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-block-three">
                      <div class="inner-box b_shadow_1">
                          <h3>
                              Gempa Bumi Terkini
                          </h3>
                          <img src="https://static.bmkg.go.id/20250712110037.mmi.jpg" class="img-fluid" alt="">
                          <small>12 Jul 2025, 11:00:37 WIB</small>
                          <p class="mt-2 text-dark">
                              <strong>Pusat gempa berada di laut 35 km BaratLaut Halmahera Timur</strong>
                          </p>
                          <div class="d-flex flex-column flex-lg-column gap-3 mt-3">
                              <div class="d-flex gap-5">
                                  <div class="p-1 rounded-4 d-flex flex-column">
                                      <span>Magnitudo :</span> 
                                      <div class=" d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#F45248" fill-rule="evenodd" d="M7.5 1.667c.358 0 .677.23.79.57l4.21 12.628 1.71-5.129a.83.83 0 0 1 .79-.57h3.333a.833.833 0 0 1 0 1.667H15.6l-2.31 6.93a.833.833 0 0 1-1.58 0L7.5 5.136l-1.71 5.129a.83.83 0 0 1-.79.57H1.666a.833.833 0 1 1 0-1.667H4.4l2.31-6.93a.83.83 0 0 1 .79-.57" clip-rule="evenodd"></path></svg>
                                          <strong class="text-dark">4,4</strong>
                                      </div>
                                  </div>
                                  <div class="p-1 rounded-4 d-flex flex-column">
                                      <span>Kedalaman :</span> 
                                      <div class=" d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#090" fill-rule="evenodd" d="M10 2.5a7.5 7.5 0 1 0 0 15 7.5 7.5 0 0 0 0-15M.833 10a9.167 9.167 0 1 1 18.333 0A9.167 9.167 0 0 1 .833 10" clip-rule="evenodd"></path><path fill="#090" fill-rule="evenodd" d="M10 5.833a4.167 4.167 0 1 0 0 8.334 4.167 4.167 0 0 0 0-8.334M4.166 10a5.833 5.833 0 1 1 11.667 0 5.833 5.833 0 0 1-11.667 0" clip-rule="evenodd"></path><path fill="#090" fill-rule="evenodd" d="M7.5 10a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0" clip-rule="evenodd"></path></svg>
                                          <strong class="text-dark">10 Km</strong>
                                      </div>
                                  </div>
                              </div>
                                  <div class="p-1  rounded-4 d-flex flex-column">
                                      <span>Koordinat Lokasi :</span> 
                                      <div class=" d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#0133CC" fill-rule="evenodd" d="M2.5 8.333a7.5 7.5 0 0 1 15 0c0 2.105-.956 3.95-2.256 5.64-1.087 1.41-2.479 2.79-3.868 4.168h-.001l-.786.782a.833.833 0 0 1-1.178 0q-.391-.391-.787-.782c-1.39-1.378-2.78-2.757-3.868-4.168-1.3-1.69-2.256-3.535-2.256-5.64m10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" clip-rule="evenodd"></path></svg>
                                          <strong class="text-dark">1,63 LU - 128,43 BT</strong>
                                      </div>
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-block-three ">
                      <div class="inner-box b_shadow_1">
                          <small>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#64748B" fill-rule="evenodd" d="M2.5 8.333a7.5 7.5 0 0 1 15 0c0 2.105-.956 3.95-2.256 5.64-1.087 1.41-2.479 2.79-3.868 4.168h-.001l-.786.782a.833.833 0 0 1-1.178 0q-.391-.391-.787-.782c-1.39-1.378-2.78-2.757-3.868-4.168-1.3-1.69-2.256-3.535-2.256-5.64m10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" clip-rule="evenodd"></path></svg>
                              Kel/Desa. Kwala Besar, Kec. Secanggang, Kota Medan, Sumatera Utara
                          </small>
                          <div class="mt-4 d-lg-flex align-items-center gap-5">
                              <img src="https://api-apps.bmkg.go.id/storage/icon/cuaca/berawan-pm.svg" width="250px" alt="">
                              <div>
                                  <h1>19  &#176;C</h1>
                                  <h3 class="mb-3">Berawan</h3>
                                  <div class="d-flex flex-column flex-lg-row gap-3">
                                      <div class="border p-3 rounded-4 d-flex flex-column">
                                          <span>Kelembapan :</span> 
                                          <div class=" d-flex">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#64748B" d="M10.817 1.92a.833.833 0 0 0-1.634 0c-.377 1.883-1.517 3.713-3.037 4.93-1.816 1.452-2.812 3.258-2.812 5.233a6.667 6.667 0 0 0 13.333 0c0-1.975-.997-3.78-2.813-5.234-1.52-1.216-2.66-3.046-3.037-4.93"></path></svg>
                                              <strong class="text-dark">20%</strong>
                                          </div>
                                      </div>
                                      <div class="border p-3 rounded-4 d-flex flex-column">
                                          <span>Kecepatan Angin :</span> 
                                          <div class=" d-flex">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 48 48"><path fill="#475569" fill-rule="evenodd" d="M38 13a3.99 3.99 0 0 0-2.982 1.334 2 2 0 1 1-2.98-2.668A8 8 0 1 1 38 25H26a2 2 0 1 1 0-4h12a4 4 0 1 0 0-8M18 8a3.99 3.99 0 0 0-2.982 1.334 2 2 0 0 1-2.98-2.668A8 8 0 1 1 18 20H3.999a2 2 0 1 1 0-4h14a4 4 0 0 0 0-8M26 40a3.99 3.99 0 0 1-2.982-1.334 2 2 0 0 0-2.98 2.668A8 8 0 1 0 26 28H4a2 2 0 1 0 0 4h22a4 4 0 0 1 0 8" clip-rule="evenodd"></path></svg>
                                              <strong class="text-dark">7 km/jam</strong>
                                          </div>
                                      </div>
                                      <div class="border p-3 rounded-4 d-flex flex-column">
                                          <span>Jarak Pandang :</span> 
                                          <div class=" d-flex">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="me-2" fill="none" viewBox="0 0 20 20"><path fill="#64748B" d="M8.333 10a1.667 1.667 0 1 1 3.333 0 1.667 1.667 0 0 1-3.333 0"></path><path fill="#64748B" fill-rule="evenodd" d="M10 3.333c-2.385 0-4.33 1.054-5.77 2.257-1.438 1.2-2.425 2.589-2.918 3.37l-.02.032c-.099.155-.226.355-.29.636a1.8 1.8 0 0 0 0 .744c.064.281.191.481.29.636l.02.031c.493.782 1.48 2.17 2.918 3.372 1.44 1.202 3.385 2.256 5.77 2.256s4.329-1.054 5.77-2.257c1.438-1.2 2.424-2.589 2.918-3.37l.02-.032c.098-.155.225-.355.29-.636a1.8 1.8 0 0 0 0-.744c-.065-.281-.192-.481-.29-.636l-.02-.031c-.494-.782-1.48-2.17-2.919-3.371-1.44-1.203-3.385-2.257-5.77-2.257m0 3.334a3.333 3.333 0 1 0 0 6.666 3.333 3.333 0 0 0 0-6.666" clip-rule="evenodd"></path></svg>
                                              <strong class="text-dark">> 10 km</strong>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="nav nav-pills mb-4 gap-2">
                      <li class="nav-item">
                          <a class="nav-link active bg-danger rounded-pill" aria-current="page" href="#">Hari Ini</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border rounded-pill text-danger" href="#">Besok</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border rounded-pill text-danger" href="#">Lusa</a>
                      </li>
                  </ul>
                  <div class="brand-section weather-section">
                      <div class="weather-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                          <div class="brand-logo-box py-3 px-4">
                              <span>18:00 WIB</span>
                              <img src="https://api-apps.bmkg.go.id/storage/icon/cuaca/hujan ringan-am.svg" width="50%" class="my-3" alt="">
                              <h3 class="mb-2 fw-bolder">19  &#176;C</h3>
                              <h6 class="fw-semibold text-secondary">Hujan Ringan</h6>
                          </div>
                          <div class="brand-logo-box py-3 px-4">
                              <span>18:00 WIB</span>
                              <img src="https://api-apps.bmkg.go.id/storage/icon/cuaca/berawan-pm.svg" width="50%" class="my-3" alt="">
                              <h3 class="mb-2 fw-bolder">19  &#176;C</h3>
                              <h6 class="fw-semibold text-secondary">Berawan</h6>
                          </div>
                          <div class="brand-logo-box py-3 px-4">
                              <span>18:00 WIB</span>
                              <img src="https://api-apps.bmkg.go.id/storage/icon/cuaca/hujan ringan-am.svg" width="50%" class="my-3" alt="">
                              <h3 class="mb-2 fw-bolder">19  &#176;C</h3>
                              <h6 class="fw-semibold text-secondary">Hujan Ringan</h6>
                          </div>
                          <div class="brand-logo-box py-3 px-4">
                              <span>18:00 WIB</span>
                              <img src="https://api-apps.bmkg.go.id/storage/icon/cuaca/berawan-pm.svg" width="50%" class="my-3" alt="">
                              <h3 class="mb-2 fw-bolder">19  &#176;C</h3>
                              <h6 class="fw-semibold text-secondary">Berawan</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="news-style-three pt_160 pb_90 z_1">
      <div class="pattern-layer">
          <div class="pattern-1" style="background-image: url('{{ asset('assets/img/shape/shape-9.png') }}');"></div>
          <div class="pattern-2" style="background-image: url('{{ asset('assets/img/shape/shape-8.png') }}');"></div>
      </div>
      <div class="auto-container">
          <div class="sec-title mb_50">
              <span class="sub-title mb_12">Media Center</span>
              <h2>Media Center PMI SUMUT</h2>
          </div>
          <div class="row clearfix">
              <div class="col-lg-8 col-md-12 col-sm-12 title-column">
                <div class="row clearfix d-flex flex-wrap">
                  @foreach ($article as $item)
                  <div class="col-lg-6 col-md-6 col-sm-12 d-flex mb-4">
                    <div class="news-block-two wow fadeInUp animated flex-fill" data-wow-delay="00ms" data-wow-duration="1500ms">
                      <div class="inner-box d-flex flex-column h-100">
                        <div class="bg-layer" style="background-image: url('{{ CmsAsset::url($item->image) }}');"></div>
                        <div>
                          <span class="post-date">
                            <i class="icon-29"></i>
                            {{ \Carbon\Carbon::parse($item->published_at)->format('d F Y') }}
                          </span>                        
                        </div>
                        <h4><a href="{{ route('artikel.show', $item->slug) }}">{{ $item->title }}</a></h4>
                        <ul class="post-info mt-auto">
                          <li><i class="icon-30"></i>{{ $item->author->name ?? 'Admin' }}</li>
                          <li>
                            <i class="d-flex align-items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark fw-bold" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                              </svg>
                            </i>
                            <span>{{ $item->category->title ?? '-' }}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                <div class="inner-content">
                  @foreach ($agenda as $item)
                    <div class="news-block-three">
                      <div class="inner-box">
                        <div>
                          <ul class="post-info">
                            <li>
                              <span class="bg-danger text-white">
                              {{ \Carbon\Carbon::parse($item->start_date)->format('d F Y') }} 
                                @if ($item->end_date)
                                  - 
                                  {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
                                @endif 
                              </span>
                            </li>
                          </ul>
                          <h3><a href="blog-details.html">{{ $item->title }}</a></h3>
                          <div class="link-box"><a href="blog-details.html"><span>Baca Selengkapnya</span><i class="icon-39"></i></a></div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
          </div>
      </div>
  </section>    
    
  <section class="testimonial-section pb_90">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                  <div class="sec-title mb_40">
                      <span class="sub-title mb_12">Infografis</span>
                      <h2>Infografis <br>{{ $identities->subtitle }}</h2>
                  </div>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        @foreach ($infographic as $item)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}" class="news-block-two shadow-lg wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box d-flex align-items-center justify-content-center" style="height: 300px;">
                                <div class="bg-layer-infografis" style="background-image: url('{{ CmsAsset::url($item->image) }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>

  @foreach ($infographic as $item)
  <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach


  <section class="cta-section">
      <div class="pattern-layer" style="background-image: url('{{ asset('assets/img/shape/shape-3.png') }}');"></div>
      <div class="bubble-shape">
          <div class="bubble bubble-1"></div>
          <div class="bubble bubble-2"></div>
      </div>
      <div class="auto-container">
          <div class="inner-container p_relative pt_110 pb_100">
              <div class="bubble-shape">
                  <div class="bubble bubble-3"></div>
                  <div class="bubble bubble-4"></div>
              </div>
              <span class="big-text">Hotline</span>
              <div class="text-box">
                  <h2>Posko Penanggulangan Bencana <br> {{ $identities->title }}</h2>
                  <a href="tel:{{ $identities->hotline }}">{{ $identities->hotline }}</a>
              </div>
              <figure class="image-box"><img src="{{ asset('assets/img/background/posko.png') }}" alt="posko"></figure>
          </div>
      </div>
  </section>

  <section class="contact-section pt_120 pb_120">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                  <div class="map-inner">
                      <iframe src="{{ $identities->maps_url }}" width="100%" height="600" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                  <div class="form-inner ml_10">
                      <div class="sec-title mb_45">
                          <span class="sub-title mb_12">Kontak</span>
                          <h2>Kirim kami pesan</h2>
                      </div>
                      <form method="post" action="https://azim.hostlin.com/Amcare/sendemail.php" id="contact-form" class="default-form">
                          <div class="row clearfix">
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <input type="text" name="username" placeholder="Nama Lengkap" required>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <input type="email" name="email" placeholder="Email" required>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <input type="text" name="subject" placeholder="Subyek" required>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <textarea name="message" placeholder="Tulis pesan kamu.."></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                  <button type="submit" class="theme-btn btn-one" name="submit-form">Kirim</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="brand-section pb_90">
    <div class="auto-container">
      <div class="sec-title centred mb_50">
        <h3>Mitra Kami</h3>
        <p class="mt-2">Kami bekerja sama dengan</p>
      </div>
      <div class="brand-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
        @foreach ($partner as $item)
          <div class="brand-logo-box"><a href="{{ $item->url }}"><img src="{{ CmsAsset::url($item->logo) }}" alt="{{ $item->name }}"></a></div>
        @endforeach
      </div>
    </div>
  </section>

@endsection

@section('script')
@endsection