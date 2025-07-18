@extends('layouts.main')
@section('seo')
  <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/module-css/blog-sidebar.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/module-css/blog-details.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/module-css/subscribe.css') }}" rel="stylesheet">
@endsection

@section('content')
  <section class="page-title centred">
    <div class="bg-layer" style="background-image: url('{{ asset('assets/img/background/berita.png') }}');"></div>
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

  <section class="sidebar-page-container pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
          <div class="col-lg-8 col-md-12 col-sm-12 content-side">
              <div class="blog-details-content p_relative">
                  <div class="news-block-one">
                      <div class="inner-box">
                          <div class="image-box">
                              <figure class="image"><img src="{{ CmsAsset::url($article->image) }}" alt=""></figure>
                          </div>
                          <div class="lower-content">
                              <ul class="post-info">
                                  <li><span>{{ $article->category->title ?? '-' }}</span></li>
                                  <li>{{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}</li>
                              </ul>
                              <h2>{{ $article->title }}</h2>
                              <div class="text-box">
                                  {!!  $article->content  !!}
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="post-share-option pt-0 pb_30">
                      <ul class="tags-list">
                          <li><span>Penulis: </span></li>
                          <li class="fw-bold text-dark">{{ $article->author->name ?? 'Admin'}}</li>
                      </ul>
                      <ul class="social-links">
                          <li><span>Share This:</span></li>
                          <li><a href="blog-details.html"><i class="icon-4"></i></a></li>
                          <li><a href="blog-details.html"><i class="icon-5"></i></a></li>
                          <li><a href="blog-details.html"><i class="icon-6"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
            <div class="col-lg-4 col-md-12 col-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-widget mb_55">
                        <div class="widget-title mb_25">
                            <h3>Cari Artikel</h3>
                        </div>
                        <div class="search-form">
                            <form id="searchForm" action="{{ route('artikel') }}" method="get" class="default-form">
                                @if (!empty($categorySlug))
                                    <input type="hidden" name="category" value="{{ $categorySlug }}">
                                @endif
                                <div class="form-group">
                                    <input type="search" name="q" value="{{ request('q') }}" placeholder="Search...">
                                    <button type="submit"><i class="icon-8"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget category-widget mb_45">
                        <div class="widget-title mb_20">
                            <h3>Kategori</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="cagegory-list clearfix">
                              @foreach ($categories as $item)
                                <li><a href="blog-details.html">{{ $item->title }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget mb_55">
                        <div class="widget-title mb_25">
                            <h3>Populer</h3>
                        </div>
                        <div class="post-inner">
                          @foreach ($populer as $item)
                            <div class="post d-flex align-items-center">
                                <figure class="post-thumb"><a href="{{ route('artikel.show', $item->slug) }}"><img src="{{ CmsAsset::url($item->image) }}" alt=""></a></figure>
                                <article>
                                    <h5><a href="{{ route('artikel.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title , 40) }}</a></h5>
                                    <span class="post-date"><i class="icon-29"></i>{{ \Carbon\Carbon::parse($item->published_at)->format('d F Y') }}</span>
                                </article>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
        <!-- sidebar-page-container end -->

@endsection

@section('script')
@endsection