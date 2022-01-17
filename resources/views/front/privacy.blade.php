@extends('layouts.front')

@section('title', 'Privacy')

@section('css') @endsection

@section('content')
        
        <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Privacy Policy</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>Privacy Policy</li>
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
                    <div class="col-lg-12">
                        {!! setting("privacy") !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Service Area End Here -->
        <!-- About Us Area End Here -->

@endsection

@section('js')

@endsection