<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} - Hello Tractor</title>

    <meta name="author" content="themesflat.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="/app/css/font-awesome.css" />
    <link rel="stylesheet" href="/app/css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/assets/images/logo/Favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/logo/Favicon.ico" />
    @vite('resources/js/firebase.js', 'vendor/courier/build')
    @vite('resources/js/app.js', 'vendor/courier/build')
</head>

<body class="body">

    @yield('css')
    <!-- dashboard -->
    <div class="dashboard-overlay"></div>
    @include('layouts.dashboard.sidebar')
    <div id="wrapper-dashboard">
        <div id="pagee" class="clearfix">
            @include('layouts.dashboard.header')
        </div>
        <div id="themesflat-content">
            <div class="dashboard-toggle">Show DashBoard</div>
        </div>

        @yield('content')
    </div>

    </div>

    <!-- Modal Popup Bid -->

    <div class="modal fade popup login-form" id="popup_bid" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @include('widgets.login')
            </div>
        </div>
    </div>

    <div class="modal fade popup login-form" id="popup_bid2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        </div>
    </div>



    <!-- Javascript -->
    <script src="/app/js/jquery.min.js"></script>
    <script src="/app/js/jquery.easing.js" defer></script>
    <script src="/app/js/jquery.nice-select.min.js" defer></script>
    <script src="/app/js/chart.js" d></script>
    <script src="/app/js/bootstrap.min.js"></script>
    <script src="/app/js/main.js"></script>
    <script src="/app/js/jquery-ui.js"></script>
    <script src="/app/js/dashboard.js"></script>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    @yield('script')
</body>

</html>
