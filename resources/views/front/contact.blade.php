@extends('layouts.front')

@section('title', 'Contact')

@section('css') @endsection

@section('content')
        
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{ asset(setting('banner_section_banner_image')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact Us</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->

        <!-- Blog Area Start Here -->
        <section class="section-padding-12-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box-layout1">
                            <div class="google-map-area">
                                <div id="googleMap" class="google-map" style="width:100%; height:420px; border-radius: 4px;"></div>
                            </div>
                            <div class="contact-info">
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-call-answer"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>{{ setting('contact_section_phone_heading_text') ?? '' }}</h4>
                                        <ul>
                                            <li>{{ setting('contact_section_phone_number_1') ?? '' }}</li>
                                            <li>{{ setting('contact_section_phone_number_2') ?? '' }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>{{ setting('contact_section_email_heading_text') ?? '' }}</h4>
                                        <ul>
                                            <li>{{ setting('contact_section_phone_email_1') ?? '' }}</li>
                                            <li>{{ setting('contact_section_phone_email_2') ?? '' }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>{{ setting('contact_section_location_heading_text') ?? '' }}</h4>
                                        <ul>
                                            <li>{{ setting('contact_section_location_1') ?? '' }}</li>
                                            <li>{{ setting('contact_section_location_2') ?? '' }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-form">
                            <div class="heading-layout4">
                                <h4>{{ setting('contact_section_form_title_text') ?? '' }}</h4>
                            </div>
                            <form class="contact-form-box validate-contact-form" action="{{ route('send.message') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-user"></i></div>
                                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
                                        <span class="invalid-feedback" role="alert">
                                            @error('name')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-envelope"></i></div>
                                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required>
                                        <span class="invalid-feedback" role="alert">
                                            @error('email')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-phone-volume"></i></div>
                                        <input type="text" placeholder="Phone" class="form-control numbers" name="phone" data-error="Phone field is required" required>
                                        <span class="invalid-feedback" role="alert">
                                            @error('phone')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-question"></i></div>
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" data-error="Phone field is required" required>
                                        <span class="invalid-feedback" role="alert">
                                            @error('subject')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-comments"></i></div>
                                        <textarea placeholder="Message" class="textarea form-control" name="message" id="form-message" rows="4" cols="20" 
                                        data-error="Message field is required" required></textarea>
                                        <span class="invalid-feedback" role="alert">
                                            @error('message')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->

@endsection

@section('js')
        
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
        <script>
            validateContactForm();
        </script>

@endsection