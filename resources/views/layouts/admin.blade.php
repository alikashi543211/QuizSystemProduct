<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_theme') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') - QuizSystem</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- CSS Files -->
    <link href="{{ asset('admin_theme') }}/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/css/admin.css">
    <link rel="stylesheet" href="{{ asset('common') }}/css/custom.css">
    @yield('css')
</head>

<body class="">
    
    <div class="loader" id="custom_page_reloader"></div>

    <div class="wrapper master_admin_elem custom_display_none" id="master_admin_elem">
        
        @include('admin.components.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('admin.components.navbar')
            <!-- End Navbar -->
            <div class="content">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include("admin.components.modals")
    
    <!--   Core JS Files   -->
    <script src="{{ asset('admin_theme') }}/assets/js/core/jquery.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/arrive.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-notify.js"></script>
    <!--  Select2 Plugin    -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!--  CKEditor Plugin    -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin_theme') }}/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/chartist.min.js"></script>
    <!-- Date Picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- Plugin jquery Validator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <!-- Customo JS -->
    <script src="{{ asset('common') }}/js/custom.js"></script>


    <script>
        // Custom Js Functions
        beforeLoadEveryThingShowLoader();

        $(document).ready(function(){
            
            @if(session('success'))
                md.showNotification('success', "{{ session('success') }}");
            @elseif(session('error'))
                md.showNotification('danger', "{{ session('error') }}");
            @endif

            disableEnterFromKeyboard();
            customizeDropifyMessages();
            validateOnlyNumber();
            removeFormLabelFloating();
            startSelect2();
            generalValidateForm();
            startDataTable();
            startDatePicker();
            onChangeDateFilterInput();
            validatorDefaults();
            var data = <?php echo json_encode(session()->getOldInput()) ?>;
            mapDataToFields(data);
            showReadMoreModal();
            onClickClearFilterButton();
            startToolTip();
            emptyModalFormValuesWhenWeClose();
        });

    </script>
    @yield('js')
</body>

</html>
