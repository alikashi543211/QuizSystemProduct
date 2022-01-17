<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | SpickAndSpan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('logo_section_favicon')) }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/meanmenu.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/fontawesome-all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/animate.min.css">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/font/flaticon.css">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/vendor/slider/css/nivo-slider.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/select2.min.css">
    <!-- Datetime Picker CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/jquery.datetimepicker.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/style.css">
    <!-- Modernize js -->
    <script src="{{ asset('front') }}/js/modernizr-3.7.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('front') }}/css/custom.css">
    @yield('css')

</head>

<body class="sticky-header">
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">



        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        @include('front.components.header')
        <!-- Header Area End Here -->

        @yield('content')

        <!-- Footer Area Start Here -->
        @include('front.components.footer')
        <!-- Footer Area End Here -->



    </div>
    <script>
        $source_image = "{{ asset(setting('logo_section_logo')) }}";
        $home_link = "{{ route('home') }}";
    </script>
    <!-- jquery-->
    <script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="{{ asset('front') }}/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('front') }}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
    <!-- MeanMenu js -->
    <script src="{{ asset('front') }}/js/jquery.meanmenu.min.js"></script> 
    <!-- Nivo Slider js -->
    <script src="{{ asset('front') }}/vendor/slider/js/jquery.nivo.slider.js"></script> 
    <script src="{{ asset('front') }}/vendor/slider/home.js"></script> 
    <!-- Owl Carousel js --> 
    <script src="{{ asset('front') }}/vendor/OwlCarousel/owl.carousel.min.js"></script> 
    <!-- CounterUp js -->
    <script src="{{ asset('front') }}/js/jquery.counterup.min.js"></script> 
    <!-- WayPoints js -->
    <script src="{{ asset('front') }}/js/waypoints.min.js"></script> 
    <!-- Validator js -->
    <script src="{{ asset('front') }}/js/validator.min.js"></script>
    <!-- Select 2 js -->
    <script src="{{ asset('front') }}/js/select2.min.js"></script>
    <!-- Datetime Picker js -->
    <script src="{{ asset('front') }}/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Main js -->
    <script src="{{ asset('front') }}/js/main.js"></script>
    <!-- Plugin jquery Validator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <!-- Toastr and Dropify -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Customo JS -->
    <script src="{{ asset('front') }}/js/custom.js"></script>

    <script>

        // Custom Js Functions
        $(document).ready(function(){
            var data = <?php echo json_encode(session()->getOldInput()) ?>;
            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @elseif(session('error'))
                toastr.error("{{ session('error') }}");
            @endif

            validatorDefaults();
            logOutUser();
            mapDataToFields(data);
            validateOnlyNumber();
            startHoursSelect2();
            startServiceSelect2();
            onChangeServiceSelect2("{{ route('front.load.hours') }}", ".hours_box");
            onChangeHoursSelect2("{{ route('front.load.estimate') }}", ".estimate_box");
            onClickEstimateBtn(".estimate_info_box", ".user_info_box");
            onClickEstimateBackBtn(".estimate_info_box", ".user_info_box");
            onChangeFormEstimateSelect2();
        });

    </script>

    @yield('js')

</body>

</html>