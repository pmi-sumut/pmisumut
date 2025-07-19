@extends('layouts.main')
@section('seo')
  <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/module-css/custom-pages.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/module-css/content.min.css') }}" rel="stylesheet">
@endsection

@section('content')
  <section class="page-title centred">
    <div class="bg-layer" style="background-image: url('{{ CmsAsset::url($pages->image) }}');"></div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb">
                <li>{{ $page }}</li>
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

  <section class="py-5">
      <div class="auto-container">
        <div class="tinymce-content">{!! $pages->content_display !!}</div>
      </div>
  </section>

@endsection

@section('script')
@endsection