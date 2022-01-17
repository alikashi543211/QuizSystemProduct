@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS - Contact Page')
@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Contact Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_form_title_text">Contact Form Title Text</label>
                                    <input type="text" name="contact_section_form_title_text" id="contact_section_form_title_text" class="form-control" value="{{ setting('contact_section_form_title_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_send_message_btn_text">Send Message Button Text</label>
                                    <input type="text" name="contact_section_send_message_btn_text" id="contact_section_send_message_btn_text" class="form-control" value="{{ setting('contact_section_send_message_btn_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_phone_heading_text">Phone Heading Text</label>
                                    <input type="text" name="contact_section_phone_heading_text" id="contact_section_phone_heading_text" class="form-control" value="{{ setting('contact_section_phone_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_phone_number_1">Phone Number 1</label>
                                    <input type="text" name="contact_section_phone_number_1" id="contact_section_phone_number_1" class="form-control" value="{{ setting('contact_section_phone_number_1') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_phone_number_2">Phone Number 2</label>
                                    <input type="text" name="contact_section_phone_number_2" id="contact_section_phone_number_2" class="form-control" value="{{ setting('contact_section_phone_number_2') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_email_heading_text">Email Heading Text</label>
                                    <input type="text" name="contact_section_email_heading_text" id="contact_section_email_heading_text" class="form-control" value="{{ setting('contact_section_email_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_phone_email_1">Email 1</label>
                                    <input type="text" name="contact_section_phone_email_1" id="contact_section_phone_email_1" class="form-control" value="{{ setting('contact_section_phone_email_1') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_phone_email_2">Email 2</label>
                                    <input type="text" name="contact_section_phone_email_2" id="contact_section_phone_email_2" class="form-control" value="{{ setting('contact_section_phone_email_2') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_location_heading_text">Location Heading Text</label>
                                    <input type="text" name="contact_section_location_heading_text" id="contact_section_location_heading_text" class="form-control" value="{{ setting('contact_section_location_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_location_1">Location 1</label>
                                    <input type="text" name="contact_section_location_1" id="contact_section_location_1" class="form-control" value="{{ setting('contact_section_location_1') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="contact_section_location_2">Location 2</label>
                                    <input type="text" name="contact_section_location_2" id="contact_section_location_2" class="form-control" value="{{ setting('contact_section_location_2') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
@endsection
