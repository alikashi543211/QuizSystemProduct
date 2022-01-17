@extends('layouts.front')

@section('title', 'Get A Quote')

@section('css') @endsection

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Get A Quote</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    @include('front.components.booking_section')

@endsection

@section('js') 
        
        <script>
            EstimateRequestValidate();
            startServiceSelect2();
            startHoursSelect2();
        </script>        

@endsection