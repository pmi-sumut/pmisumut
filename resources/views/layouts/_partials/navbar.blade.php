<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box">
            <figure class="logo-box"><a href="/"><img src="{{ CmsAsset::url($identities->logo) }}" height="200px" alt=""></a></figure>
            <div class="close-search"><span class="fas fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="https://azim.hostlin.com/Amcare/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                            <button type="submit"><i class="icon-8"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list d-flex gap-3">
                    <li><i class="icon-48"></i><a href="tel:{{ $identities->phone }}">{{ $identities->phone }}</a></li>
                    <li><i class="icon-47"></i><a href="mailto:{{ $identities->email }}">{{ $identities->email }}</a></li>
                </ul>
                <div class="right-column">
                    <div class="language-box">
                        <div class="language-dropdown">
                            <button id="dropdown-btn"></button>
                            <ul class="dropdown-content" id="dropdown-content"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="/"><img src="{{ CmsAsset::url($identities->logo) }}" height="100px" alt="logo"></a></figure>
                <div class="menu-area">
                    <div class="mobile-nav-toggler bg-white">
                        <i class="icon-bar bg-danger"></i>
                        <i class="icon-bar bg-danger"></i>
                        <i class="icon-bar bg-danger"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Beranda</a></li> 
                                @foreach($menus as $menu)
                                  <li @if($menu->subMenus->isNotEmpty()) class="dropdown" @endif>
                                    <a href="{{ $menu->url }}" @if($menu->is_blank) target="_blank" @endif>
                                      {{ $menu->name }}
                                    </a>
                                    @if($menu->subMenus->isNotEmpty())
                                      <ul>
                                        @foreach($menu->subMenus as $subMenu)
                                          <li><a href="{{ $subMenu->url }}" @if($subMenu->is_blank) target="_blank" @endif>{{ $subMenu->name }}</a></li>
                                        @endforeach
                                      </ul>
                                    @endif
                                  </li>
                                @endforeach
                                <li><a href="contact.html">Agenda</a></li> 
                                <li class="dropdown">
                                  <a href="#">Artikel</a>
                                  <ul>
                                    <li><a href="{{ route('artikel') }}">Semua</a></li>
                                    @foreach ($categories as $category)
                                      <li><a href="{{ route('artikel', ['category' => $category->slug]) }}">{{$category->title}}</a></li>
                                    @endforeach
                                  </ul>
                                </li> 
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    <div class="btn-box"><a href="index-2.html" class="theme-btn btn-one">Donasi</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="index-2.html"><img src="{{ CmsAsset::url($identities->logo) }}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    <div class="btn-box"><a href="index-2.html" class="theme-btn btn-one">Donasi</a></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
  <div class="menu-backdrop"></div>
  <div class="close-btn"><i class="fas fa-times"></i></div>
  <nav class="menu-box">
      <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
          <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
      <div class="contact-info">
          <h4>Informasi Markas</h4>
          <ul>
              <li>{{ $identities->address }}</li>
              <li><a href="tel:{{ $identities->phone }}">{{ $identities->phone }}</a></li>
              <li><a href="mailto:{{ $identities->email }}">{{ $identities->email }}</a></li>
          </ul>
      </div>
      <div class="social-links">
          <ul class="clearfix">
              <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
              <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
              <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
              <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
          </ul>
      </div>
  </nav>
  </div>
