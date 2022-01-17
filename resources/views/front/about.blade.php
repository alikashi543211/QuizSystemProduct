@extends('layouts.front')

@section('title', 'About')

@section('css') @endsection

@section('content')
        
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>About Us</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->

        <!-- About Us Area Start Here -->
        <section class="section-padding-12-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-box-layout1">
                            <h2 class="item-title">{{ setting('about_section_main_title_text') ?? '' }}</h2>
                            <p>{{ setting('about_section_paragraph_1_text') ?? '' }}</p>
                            <p>{{ setting('about_section_paragraph_2_text') ?? '' }}</p>
                            <div class="list-item">
                                <ul>
                                    <li>
                                        <h3>{{ setting('about_section_point_1_heading_text') ?? '' }}</h3>
                                        <p>{{ setting('about_section_point_1_description_text') ?? '' }}</p>
                                    </li>
                                    <li>
                                        <h3>{{ setting('about_section_point_2_heading_text') ?? '' }}</h3>
                                        <p>{{ setting('about_section_point_2_description_text') ?? '' }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-box-layout6">
                            <div class="item-img">
                                <img src="{{ asset(setting('about_section_right_image') ?? '') }}" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End Here -->

@endsection

@section('js')

@endsection