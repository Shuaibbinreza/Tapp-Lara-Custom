@extends('layouts.master')
@section('title') PDF & Info @endsection
@section('css')
<!--Swiper slider css-->
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
<!-- jsvectormap css -->
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
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
                            <div class="col-xxl-6">
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
                                    <iframe src="https://img.pikbest.com/wp/202345/wallpaper-hd-landscape-wallpapers-free-download-png_9591924.jpg!bw700" frameborder="0" width="100%" style="height: 70vh"></iframe>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row mt-2">
                                    <div class="col-lg-12">

                                        {{-- <div class="justify-content-between d-flex align-items-center mb-3">
                                            <h5 class="mb-0 pb-1 text-decoration-underline">Quilljs Editor</h5>
                                        </div> --}}
                                        <div class="card">
                                            {{-- <div class="card-header">
                                                <h4 class="card-title mb-0">Snow Editor</h4>
                                            </div><!-- end card header --> --}}

                                            <div class="card-body">
                                                <p class="text-muted">Use <code>snow-editor</code> class to set snow editor.</p>
                                                <div class="snow-editor" style="height: 60vh;">
                                                    <h3><span class="ql-size-large">Hello World!</span></h3>
                                                    <p><br></p>
                                                    <h3>This is an simple editable area.</h3>
                                                    <p><br></p>
                                                    <ul>
                                                        <li>
                                                            Select a text to reveal the toolbar.
                                                        </li>
                                                        <li>
                                                            Edit rich document on-the-fly, so elastic!
                                                        </li>
                                                    </ul>
                                                    <p><br></p>
                                                    <p>
                                                        End of simple area
                                                    </p>

                                                </div> <!-- end Snow-editor-->
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!-- end col -->
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

<script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('build/libs/quill/quill.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection
