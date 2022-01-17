@extends('layouts.front')

@section('title', 'Home')

@section('css')
    
    <style>
        .progress-wrap-layout1 {
            background-image: url('{{ asset(setting("client_section_background_image")) }}') !important;
        }
    </style>

@endsection

@section('content')
        
    <!-- Slider Area Start Here -->
    @include('front.components.slider')
    <!-- Slider Area End Here -->

   <!-- About Us Area Start Here -->
    @include('front.components.about_us')
    <!-- About Us Area End Here -->

    <!-- Call To Action Area Start Here -->
    @include('front.components.call_to_action')
    <!-- Call To Action Area End Here -->

    <!-- About Us Area Start Here -->
    @include('front.components.booking_section')
    <!-- About Us Area End Here -->

    <!-- Testimonial Area Start Here -->
    @include('front.components.testimonial')
    <!-- Testimonial Area End Here -->
    
    <!-- Progress Area Start Here -->
    @include('front.components.progress_section')
    <!-- Progress Area End Here -->

@endsection

@section('js') 
        
        <script>
            EstimateRequestValidate();
            simpleScrollToEstimate();
            startServiceSelect2();
            startHoursSelect2();
        </script>        

@endsection