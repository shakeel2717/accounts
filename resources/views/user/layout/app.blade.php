<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Asan Webs Development">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <title>@yield('title') - {{ env('APP_NAME') }} {{ env('APP_SHORT_DESC') }}</title>
    <link rel="shortcut icon" href="/favi.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chart.js/dist/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js') }}"></script>
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
        <form class="input-group input-group-merge input-group-borderless">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="tio-search"></i>
                </div>
            </div>
            <input class="form-control rounded-0" type="search" placeholder="Search in front"
                aria-label="Search in front">
            <div class="input-group-append">
                <div class="input-group-text">
                    <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                "target": "#searchDropdown",
                                "type": "css-animation",
                                "animationIn": "fadeIn",
                                "hasOverlay": "rgba(46, 52, 81, 0.1)",
                                "closeBreakpoint": "md"
                                }'>
                            <i class="tio-clear tio-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('user.dashboard') }}" aria-label="Front">
                    <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo">
                    <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos/logo-short.svg') }}"
                        alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="navbar-nav-wrap-content-left">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                        data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                        data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->

                <!-- Search Form -->
                <div class="d-none d-md-block">
                    <form class="position-relative">
                        <div
                            class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tio-search"></i>
                                </div>
                            </div>
                            <input type="search" class="js-form-search form-control" placeholder="Search in front"
                                aria-label="Search in front" data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                            <a class="input-group-append" href="javascript:;">
                                <span class="input-group-text">
                                    <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                                </span>
                            </a>
                        </div>
                        <div id="searchDropdownMenu"
                            class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                            <div class="card-body-height py-3">
                                <small class="dropdown-header mb-n2">Recent searches</small>

                                <div class="dropdown-item bg-transparent text-wrap my-2">
                                    {{-- <span class="h4">
                                        <a class="btn btn-xs btn-soft-dark btn-pill" href="./index.html">
                                            Notification panel <i class="tio-search ml-1"></i>
                                        </a>
                                    </span> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Search Form -->
            </div>

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">
                    <li class="nav-item d-md-none">
                        <!-- Search Trigger -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="javascript:;" data-hs-unfold-options='{
                       "target": "#searchDropdown",
                       "type": "css-animation",
                       "animationIn": "fadeIn",
                       "hasOverlay": "rgba(46, 52, 81, 0.1)",
                       "closeBreakpoint": "md"
                     }'>
                                <i class="tio-search"></i>
                            </a>
                        </div>
                        <!-- End Search Trigger -->
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationDropdown",
                       "type": "css-animation"
                     }'>
                                <i class="tio-notifications-on-outlined"></i>
                            </a>

                            <div id="notificationDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu"
                                style="width: 25rem;">
                                <!-- Header -->
                                <div class="card-header">
                                    <span class="card-title h4">Notifications</span>
                                </div>
                                <!-- End Header -->
                                <!-- Body -->
                                <div class="card-body-height">
                                    <!-- Tab Content -->
                                    <div class="tab-content" id="notificationTabContent">
                                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel"
                                            aria-labelledby="notificationNavOne-tab">
                                            <ul class="list-group list-group-flush navbar-card-list-group">
                                                <li class="list-group-item custom-checkbox-list-wrapper">
                                                    <div class="row">
                                                        <div class="col-auto position-static">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tio-lg">
                                                                    <i class="tio">filter_list</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col ml-n3">
                                                            <p class="card-text font-size-sm">There are no new messages.
                                                                You're all caught up!</p>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                                <!-- End Body -->
                                <!-- Card Footer -->
                                <a class="card-footer text-center" href="#">
                                    View all notifications
                                    <i class="tio-chevron-right"></i>
                                </a>
                                <!-- End Card Footer -->
                            </div>
                        </div>
                        <!-- End Notification -->
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Apps -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="javascript:;" data-hs-unfold-options='{
                       "target": "#appsDropdown",
                       "type": "css-animation"
                     }'>
                                <i class="tio-menu-vs-outlined"></i>
                            </a>

                            <div id="appsDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu"
                                style="width: 25rem;">
                                <!-- Header -->
                                <div class="card-header">
                                    <span class="card-title h4">Web apps &amp; services</span>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body card-body-height">
                                    <!-- Nav -->
                                    <div class="nav nav-pills flex-column">
                                        <a class="nav-link" href="#">
                                            <div class="media align-items-center">
                                                <span class="avatar avatar-xs avatar-soft-dark mr-3">
                                                    <span class="avatar-initials"><i class="tio-apps"></i></span>
                                                </span>
                                                <div class="media-body text-truncate">
                                                    <span class="h5 mb-0">Add New Device</span>
                                                    <span class="d-block font-size-sm text-body">Click to Add new
                                                        Device</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Nav -->
                                </div>
                                <!-- End Body -->
                            </div>
                        </div>
                        <!-- End Apps -->
                    </li>

                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                                data-hs-unfold-options='{
                       "target": "#accountNavbarDropdown",
                       "type": "css-animation"
                     }'>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img"
                                        src="{{ asset('assets/svg/components/placeholder-avatar.svg') }}"
                                        alt="Profile">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/svg/components/placeholder-avatar.svg') }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span
                                                class="card-title h5">{{ mb_strimwidth(auth()->user()->fname . ' ' . auth()->user()->lname, 0, 20, '...') }}</span>
                                            <span
                                                class="card-text">{{ mb_strimwidth(auth()->user()->email, 0, 20, '...') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp;
                                        account</span>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <span class="text-truncate pr-2" title="Settings">Settings</span>
                                </a>


                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <a class="navbar-brand" href="{{ route('user.dashboard') }}" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo">
                        <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos/logo-short.svg') }}"
                            alt="Logo">
                    </a>
                    <button type="button"
                        class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <li class="nav-item">
                            <small class="nav-subtitle" title="Layouts">Overview</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('user.dashboard') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('user.customer.index') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Customers</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('user.seller.index') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Seller</span>
                            </a>
                        </li>



                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="#" title="Layouts" data-placement="left">
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements btn btn-outline btn-white"><i
                                        class="tio-wallet nav-icon"></i>Generate Reports</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="navbar-vertical-footer">
                    <ul class="navbar-vertical-footer-list">
                        <li class="navbar-vertical-footer-list-item">
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                    href="#">
                                    <i class="tio-tune"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">@yield('title')</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="#">
                            <i class="tio-add mr-1"></i> Add Device
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            @yield('content')
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">&copy; {{ env('APP_NAME') }}. <span
                            class="d-none d-sm-inline-block">{{ date('Y') }}
                            {{ env('APP_SHORT_DESC') }}.</span></p>
                </div>
                <div class="col-auto">
                    <div class="d-flex justify-content-end">
                        <!-- List Dot -->
                        <ul class="list-inline list-separator">
                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">FAQ</a>
                            </li>

                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">License</a>
                            </li>
                        </ul>
                        <!-- End List Dot -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js.extensions/chartjs-extensions.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/hs.flatpickr.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF FLATPICKR
            // =======================================================
            $('.js-flatpickr').each(function() {
                $.HSCore.components.HSFlatpickr.init($(this));
            });
        });
    </script>
    <script>
        $(document).on('ready', function() {
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });
            var sidebar = $('.js-navbar-vertical-aside').hsSideNav();
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })
            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });
            $('.js-form-search').each(function() {
                new HSFormSearch($(this)).init()
            });
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
            Chart.plugins.unregister(ChartDataLabels);
            var start = moment();
            var end = moment();

            function cb(start, end) {
                $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format(
                    'MMM D') + ' - ' + end.format('MMM D, YYYY'));
            }
        });
    </script>
    @yield('footer')
</body>

</html>
