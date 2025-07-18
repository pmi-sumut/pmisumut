<section class="subscribe-section pt_45 pb_45">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url('{{ asset('assets/img/shape/shape-4.png') }}');"></div>
        <div class="pattern-2" style="background-image: url('{{ asset('assets/img/shape/shape-5.png') }}');"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-12 text-column d-flex justify-content-center justify-content-lg-start">
                <div class="text-box">
                    <h2>Ikuti Kami</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 justify-content-center justify-content-lg-end mt-3 mt-md-0">
                <ul class="social-links d-flex justify-content-center justify-content-lg-end gap-3 z-10">
                    <li><a href="index-2.html" class="btn btn-outline-danger bg-light fs-4 rounded-pill"><span class="fab fa-twitter"></a></li>
                    <li><a href="index-2.html" class="btn btn-outline-danger bg-light fs-4 rounded-pill "><span class="fab fa-facebook-square"></a></li>
                    <li><a href="index-2.html" class="btn btn-outline-danger bg-light fs-4 rounded-pill"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index-2.html" class="btn btn-outline-danger bg-light fs-4 rounded-pill"><span class="fab fa-youtube"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="widget-section pt_110 pb_110">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <figure class="logo-box"><a href="/"><img src="{{ CmsAsset::url($identities->logo) }}" height="200px" alt=""></a></figure>
                            <h2 class="mt-4">{{ $identities->title }}</h2>
                            <div class="location-box mt-5 d-flex align-items-center gap-4">
                                <i class="icon-48 fs-5 text-danger"></i>
                                <p class="fs-6 text-white">
                                    {{ $identities->phone }}
                                </p>
                            </div>
                            <div class="location-box mt-2 d-flex align-items-center gap-4">
                                <i class="icon-47 fs-6 text-danger"></i>
                                <p class="fs-6 text-white">
                                    {{ $identities->email }}
                                </p>
                            </div>
                            <div class="location-box mt-2 d-flex gap-4">
                                <i class="icon-17 fs-5 text-danger"></i>
                                <p class="fs-6 text-white">
                                    {{ $identities->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Link Lainnya</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="https://pmi.or.id" target="_blank">PMI Pusat</a></li>
                                <li><a href="https://mis.pmi.or.id" target="_blank">MIS PMI</a></li>
                                <li><a href="https://siamo.pmi.or.id" target="_blank">SIAMO</a></li>
                                <li><a href="https://pmer.pmi.or.id" target="_blank">PMER</a></li>
                                <li><a href="https://sikap.pmi.or.id" target="_blank">SIKAP</a></li>
                                <li><a href="https://ayodonor.pmi.or.id" target="_blank">Ayodonor</a></li>
                                <li><a href="https://humanis.web.id" target="_blank">HUMANIS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Link Lainnya</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="https://mis.pmi.or.id">MIS PMI</a></li>
                                <li><a href="https://siamo.pmi.or.id">SIAMO</a></li>
                                <li><a href="https://pmer.pmi.or.id">PMER</a></li>
                                <li><a href="https://ayodonor.pmi.or.id">Ayodonor</a></li>
                                <li><a href="https://humanis.web.id">HUMANIS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner d-flex justify-content-center text-center">
                <div class="copyright d-flex justify-content-center text-center"><p>2025 &copy; {{ $identities->subtitle }} Powered By <a href="https://gariskode.com">Garis Kode</a></p></div>
            </div>
        </div>
    </div>
</footer>
