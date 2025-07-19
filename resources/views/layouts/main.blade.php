<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Amcare - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    @yield('seo')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/brand.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/feature.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/funfact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/process.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/chooseus.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/faq.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/subscribe.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
  </head>


  <body>
    <div class="boxed_wrapper ltr">

      <div class="chat-icon bg-transparent">
        <button type="button" class="chat-toggler bg-transparent shadow-non">
          <img src="{{ asset('assets/img/icon/pmi-siap.png') }}" alt="">
        </button>
      </div>


        <!--chat popup-->
        <div id="chat-popup" class="chat-popup">
            <div class="popup-inner">
                <div class="close-chat"><i class="far fa-times"></i></div>
                <div class="chat-form">
                    <p>Hubungi kami jika kamu memerlukan bantuan</p>
                    <div class="d-flex flex-column">
                      @foreach ($services as $item)
                        <div class="message-btn ">
                            <a href="telp:{{$item->contact_person}}"  class="theme-btn btn-one d-flex w-100 justify-content-center my-2">{{ $item->title }}</a>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>

      @include('layouts._partials.navbar')  

      <main>
        @yield('content')
      </main>

      @include('layouts._partials.footer')
      
      <div class="scroll-to-top">
          <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
          </svg>
      </div>
    </div>
      

    <!-- jQuery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltop.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('script')

  </body>

</html>
