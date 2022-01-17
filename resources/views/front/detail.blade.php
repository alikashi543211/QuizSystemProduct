@extends('layouts.front')

@section('title', 'Detail')

@section('css') @endsection

@section('content')
        
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>{{ $cat->name }}</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Services</a>
                                </li>
                                <li>{{ $cat->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Single Service Area Start Here -->
        <section class="section-padding-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-service-box-layout1">
                            <div class="main-img">
                                <img src="{{ asset($cat->image) }}">
                            </div>
                            <div class="service-content">
                                <h2 class="item-title">{{ $cat->name }} </h2>
                                <p>{{ $cat->description }}</p>

                                <div class="service-more-info">
                                    <div class="heading-layout4">
                                        <h3>Service Information</h3>
                                    </div>
                                    <div class="row gutters-20">
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12">
                                            <div class="single-info">
                                                <div class="item-title">Price</div>
                                                <div class="item-subtitle">£{{ $cat->price }}</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12">
                                            <div class="single-info">
                                                <div class="item-title">Minimum Cleaning Hours</div>
                                                <div class="item-subtitle">{{ $cat->min_hours }} - hours</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- About Us Area Start Here -->
                        @include("front.components.estimate_form")
                        <!-- About Us Area End Here -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Single Service Area End Here -->
        <!-- About Us Area End Here -->

@endsection

@section('js')
    
    <script>
        EstimateRequestValidate();
    </script>

@endsection