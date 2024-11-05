@extends('layouts.master')
@section('title') PDF & Info @endsection
@section('css')
<!--Swiper slider css-->
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
<!-- jsvectormap css -->
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title')Extracted Information @endslot
@endcomponent

<div class="row dash-nft">
    <div class="col-xxl-12">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-xxl-8">
                                <div class="">
                                    {{-- <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Marketplace</h4>
                                        <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                                                1Y
                                            </button>
                                        </div>
                                    </div><!-- end card header --> --}}
                                    <iframe src="https://pdfobject.com/pdf/sample.pdf" frameborder="0" width="100%" style="height: 70vh"></iframe>
                                </div>
                            </div>

                            <div class="col-xxl-4 d-none">
                                <div class="border-start p-4 h-100 d-flex flex-column">

                                    <div class="w-100">
                                        <div class="d-flex align-items-center">
                                            <img src="https://img.themesbrand.com/velzon/images/img-2.gif" class="img-fluid avatar-xs rounded-circle object-fit-cover" alt="">
                                            <div class="ms-3 flex-grow-1">
                                                <h5 class="fs-16 mb-1">Trendy Fashion Portraits</h5>
                                                <p class="text-muted mb-0">Artwork</p>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="align-middle text-muted" role="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-share-line fs-18"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                                    <li>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="ri-twitter-fill text-primary align-bottom me-1"></i> Twitter
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="ri-facebook-circle-fill text-info align-bottom me-1"></i> Facebook
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="ri-google-fill text-danger align-bottom me-1"></i> Google
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="ff-secondary fw-bold mt-4 cfs-22"><i class="mdi mdi-ethereum text-primary"></i> 346.12 ETH</h3>
                                        <p class="text-success mb-3">+586.85 (40.6%)</p>

                                        <p class="text-muted">NFT art is a digital asset that is collectable, unique, and non-transferrable, Cortes explained Every NFT is unique duplicated.</p>

                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <p class="fs-14 text-muted mb-1">Current Bid</p>
                                                <h4 class="fs-20 ff-secondary fw-semibold mb-0">342.74 ETH</h4>
                                            </div>

                                            <div>
                                                <p class="fs-14 text-muted mb-1">Highest Bid</p>
                                                <h4 class="fs-20 ff-secondary fw-semibold mb-0">346.67 ETH</h4>
                                            </div>
                                        </div>

                                        <div class="dash-countdown mt-4 pt-1">
                                            <div id="countdown" class="countdownlist"></div>
                                        </div>

                                        <div class="row mt-4 pt-2">
                                            <div class="col">
                                                <a href="apps-nft-item-details" class="btn btn-primary w-100">View Details</a>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-info w-100">Bid Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="">
                                    <div class="card-header align-items-center d-flex">
                                        <h5 class="card-title mb-0 flex-grow-1">File Name</h5>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded-2 fs-17">
                                                    <i class="ri-file-text-fill align-bottom text-secondary"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">File Name: </h6>
                                            <h6 class="flex-shrink-0 mb-0">Sample PDF</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-danger-subtle text-danger rounded-2 fs-17">
                                                    <i class="ri-folder-2-fill align-bottom text-warning display-17"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">File Size: </h6>
                                            <h6 class="flex-shrink-0 mb-0">10MB</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-success-subtle text-success rounded-2 fs-17">
                                                    <i class="ri-whatsapp-line"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">Uploaded at: </h6>
                                            <h6 class="flex-shrink-0 mb-0">11th October 2024</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-dark-subtle text-dark rounded-2 fs-17">
                                                    <i class="ri-invision-line"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">Invision</h6>
                                            <h6 class="flex-shrink-0 mb-0">19k</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-danger-subtle text-danger rounded-2 fs-17">
                                                    <i class="ri-instagram-line"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">Instagram</h6>
                                            <h6 class="flex-shrink-0 mb-0">18k</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-info-subtle text-info rounded-2 fs-17">
                                                    <i class="ri-telegram-2-line"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">Telegram</h6>
                                            <h6 class="flex-shrink-0 mb-0">26k</h6>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-secondary-subtle text-secondary rounded-2 fs-17">
                                                    <i class="ri-youtube-line"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-0 fs-14 flex-grow-1">YouTube</h6>
                                            <h6 class="flex-shrink-0 mb-0">9k</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div><!--end row-->
    </div><!--end col-->
</div>
<!--end row-->

@endsection
@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!-- Countdown js -->
<script src="{{ URL::asset('build/js/pages/coming-soon.init.js') }}"></script>

<!-- Marketplace init -->
<script src="{{ URL::asset('build/js/pages/dashboard-nft.init.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection
