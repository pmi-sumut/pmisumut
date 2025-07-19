@extends('layouts.main')

@section('seo')
    <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url('{{ asset('assets/img/background/relawan.png') }}');"></div>
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

<section class="service-style-five pt_120 pb_120">
    <div class="auto-container">
        <div class="inner-container" x-data="fetchMemberCount()" x-init="getMemberCount">
            <div class="category-block-one">
                <div class="inner-box">
                    <div class="bg-layer bg-layer-1" style="background-image: url('{{ asset('assets/img/background/mula.png') }}');"></div>
                    <span class="big-text">PMR Mula</span>
                    <div class="content-box">
                        <h2 class="mb-0">PMR Mula</h2>
                        <p class="mb-3">Untuk tingkat setara SD (sekolah dasar)</p>
                        <div class="fw-semibold fs-2 mb-5 text-white">
                            <span x-show="loadingCount">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Loading...
                            </span>
                            <span x-show="!loadingCount" x-text="formatNumber(memberData.PMR.MULA) + ' Anggota'">0 Anggota</span>
                        </div>
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
                        <div class="fw-semibold fs-2 mb-5 text-white">
                            <span x-show="loadingCount">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Loading...
                            </span>
                            <span x-show="!loadingCount" x-text="formatNumber(memberData.PMR.MADYA) + ' Anggota'">0 Anggota</span>
                        </div>
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
                        <div class="fw-semibold fs-2 mb-5 text-white">
                            <span x-show="loadingCount">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Loading...
                            </span>
                            <span x-show="!loadingCount" x-text="formatNumber(memberData.PMR.WIRA) + ' Anggota'">0 Anggota</span>
                        </div>
                        <div class="btn-box"><a href="https://mis.pmi.or.id/pmi/anggota/register?jenis=3">Gabung Sekarang</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
<script>
    function fetchMemberCount() {
        return {
            memberData: {
                PMR: { MULA: 0, MADYA: 0, WIRA: 0 },
            },
            loadingCount: true, // State to control loading indicator for counts
            error: '', // To store any error message

            async getMemberCount() {
                const apiUrl = @json(PmiService::v1('/siamo-service/member-count'));
                try {
                    const response = await fetch(apiUrl);
                    if (!response.ok) {
                        throw new Error('Failed to fetch data');
                    }
                    const data = await response.json();
                    if (data.success) {
                        this.memberData.PMR.MULA = data.data[0].categories[0].count;
                        this.memberData.PMR.MADYA = data.data[0].categories[1].count;
                        this.memberData.PMR.WIRA = data.data[0].categories[2].count;
                    } else {
                        this.error = 'Data retrieval failed';
                    }
                } catch (err) {
                    this.error = err.message;
                } finally {
                    this.loadingCount = false; 
                }
            },

            formatNumber(number) {
                return new Intl.NumberFormat('id-ID').format(number);
            }
        }
    }
</script>
@endsection
