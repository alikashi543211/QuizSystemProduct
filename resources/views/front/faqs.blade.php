@extends('layouts.front')

@section('title', 'FAQs')

@section('css') @endsection

@section('content')
        
        <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>{{ setting('faq_page_banner_heading_text') }}</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>FAQs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Single Service Area Start Here -->
        <section class="section-padding-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq-box-layout1">
                            <div id="accordion" class="accordion">
                                @foreach(activeFaqs() as $item)
                                    @if($loop->iteration == 1)
                                        <div class="card">
                                            <div class="card-header" id="headingOne-{{ $loop->iteration }}">
                                                <h5 class="heading-title" data-toggle="collapse" data-target="#collapseOne-{{ $loop->iteration }}" 
                                                    aria-expanded="true" aria-controls="collapseOne-{{ $loop->iteration }}">{{ $item->question }}</h5>
                                            </div>
                                            <div id="collapseOne-{{ $loop->iteration }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ $item->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card">
                                            <div class="card-header" id="headingTwo-{{ $loop->iteration }}">
                                                <h5 class="heading-title collapsed" data-toggle="collapse" data-target="#collapseTwo-{{ $loop->iteration }}" 
                                                aria-expanded="false" aria-controls="collapseTwo-{{ $loop->iteration }}">{{ $item->question }}</h5>
                                            </div>
                                            <div id="collapseTwo-{{ $loop->iteration }}" class="collapse" aria-labelledby="headingTwo-{{ $loop->iteration }}" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ $item->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Service Area End Here -->

@endsection

@section('js')

@endsection