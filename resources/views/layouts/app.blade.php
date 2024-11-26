<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<head>
    <meta charset="utf-8">
    <title>{{ $title }} - Hello Tractor</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/app/css/font-awesome.css">
    <link rel="stylesheet" href="/app/css/styles.css">


    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/assets/images/logo/Favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="/assets/images/logo/Favicon.ico">

    @vite('resources/js/firebase.js', 'vendor/courier/build')
    @vite('resources/js/app.js', 'vendor/courier/build')
</head>

<body class="body header-fixed">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
        </div>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            @include('layouts.home.header')
            @if (url()->current() != route('home') && url()->current() != route('login') && url()->current() != route('register'))
                <section class="flat-title mb-40">
                    <div class="container2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-inner style">
                                    <div class="title-group fs-12"><a class="home fw-6 text-color-3"
                                            href="{{ route('home') }}">Home</a><span>{{ $title }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @yield('content')

            @include('layouts.home.footer')
        </div>
        <!-- /#page -->

    </div>

    <!-- Modal Popup Bid -->

    <div class="modal fade popup login-form" id="popup_bid" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <div class="wrap-modal flex">
                        <div class="images flex-none">
                            <img src="/assets/images/section/login.jpg" alt="images">
                        </div>
                        @include('widgets.login')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade popup login-form" id="popup_bid2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40 style2">
                    <div class="wrap-modal flex">
                        @include('widgets.register')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div id="compare_listing_wrap">
                <div id="tfcl-compare-listings" class="compare-listing listing-open">
                    <div id="tfcl-compare-listing-listings">
                        <div class="compare-listing-body">
                            <div class="compare-thumb-main">
                                <div class="compare-thumb tfcl-compare-listing" data-listing-id="267">
                                    <button type="button" class="compare-listing-remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                            viewBox="0 0 18 19" fill="none">
                                            <path d="M4.5 14L13.5 5M4.5 5L13.5 14" stroke="#24272C" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <img loading="lazy" class="compare-listing-img" alt="image"
                                        src="/assets/images/dashboard/compare1.jpg">
                                    <div class="content">
                                        <h3 class="tfcl-listing-title title">
                                            <a title="Leslie Alexander"
                                                href="https://autodealwp.themesflat.co/listing/dongfeng-aeolus-yixuan-mach/">2017
                                                BMV X1 xDrive 20d xline</a>
                                        </h3>
                                        <ul class="description">
                                            <li class="mileage"><i class="icon-autodeal-km1"></i> 72,491 kms</li>
                                            <li class="fuel"><i class="icon-autodeal-diesel"></i> Diesel</li>
                                            <li class="trans"><i class="icon-autodeal-automatic"></i> Automatic</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="compare-thumb tfcl-compare-listing" data-listing-id="266">
                                    <button type="button" class="compare-listing-remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                            viewBox="0 0 18 19" fill="none">
                                            <path d="M4.5 14L13.5 5M4.5 5L13.5 14" stroke="#24272C" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <img loading="lazy" class="compare-listing-img" alt="image"
                                        src="/assets/images/dashboard/compare2.jpg">
                                    <div class="content">
                                        <h3 class="tfcl-listing-title title">
                                            <a title="Leslie Alexander"
                                                href="https://autodealwp.themesflat.co/listing/toyota-camry-2025/">2017
                                                BMV X1
                                                xDrive 20d xline</a>
                                        </h3>
                                        <ul class="description">
                                            <li class="mileage"><i class="icon-autodeal-km1"></i> 72,491 kms</li>
                                            <li class="fuel"><i class="icon-autodeal-diesel"></i> Hybrid</li>
                                            <li class="trans"><i class="icon-autodeal-automatic"></i> Automatic</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="compare.html" class="button tfcl-compare-listing-button">Compare</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('layouts.chatmodal')

    <!-- go top button -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>
    <!-- /go top button -->

    <!-- Javascript -->
    <script src="/app/js/jquery.min.js"></script>
    <script src="/app/js/jquery.easing.js"></script>
    <script src="/app/js/jquery.nice-select.min.js"></script>
    <script src="/app/js/bootstrap.min.js" defer></script>
    <script src="/app/js/plugin.js" defer></script>
    <script src="/app/js/shortcodes.js" defer></script>
    <script src="/app/js/main.js" defer></script>

    <!-- Javascript -->
    <script src="/app/js/swiper-bundle.min.js" defer></script>
    <script src="/app/js/swiper.js" defer></script>
    <script src="/app/js/jquery.fancybox.js"></script>
    <script src="/app/js/jquery-validate.js"></script>
    <script src="/app/js/price-ranger.js" defer></script>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    @include('layouts.functions')
    <script>
        var models = {!! json_encode($models, true) !!};
        document.getElementById('make').addEventListener('change', function() {
            var makeId = this.value;
            var modelSelect = document.getElementById('model');

            // Clear the current options in the model select dropdown
            modelSelect.innerHTML = '<option value="">Select Model</option>';

            // Filter models by selected make_id
            var filteredModels = models.filter(function(model) {
                return model.make_id == makeId;
            });

            // Populate the model select dropdown with the filtered models
            filteredModels.forEach(function(model) {
                var option = document.createElement('option');
                option.value = model.id;
                option.textContent = model.name;
                modelSelect.appendChild(option);
            });
        });
    </script>
    @yield('script')
</body>

</html>
