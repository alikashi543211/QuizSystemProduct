@extends('layouts.front')

@section('title', 'Thank You')

@section('css') @endsection

@section('content')

        <!-- Inne Page Banner Area End Here -->
        <!-- Single Service Area Start Here -->
        <section class="section-padding-12">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="{{ asset('front') }}/img/finish.png" width="120">       
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text"><span class="theme_color">
                            @if(!is_null($message))
                                {{ $message }}
                            @else
                                <span>Thanks for applying!</span></span> We'll review your estimate request and get back to you if you're accepted.
                            @endif
                        </div>       
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <a href="{{ route('home') }}" class="btn-fill-sm bg-accent text-primarytext btn-slide-hover get-quote-btn">Go To Home <i class="fas fa-angle-right"></i></a>    
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Service Area End Here -->
        <!-- About Us Area End Here -->

@endsection

@section('js')

@endsection