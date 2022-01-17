@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS - General')
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
                        <h5 class="card-title">Logos</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" name="logo_section_favicon" id="favicon" class="dropify" data-default-file="{{ asset(setting('logo_section_favicon') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="logo_light">Logo</label>
                                    <input type="file" name="logo_section_logo" id="logo_light" class="dropify" data-default-file="{{ asset(setting('logo_section_logo') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
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

        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Banner Image Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="logo_light">Banner Image</label>
                                    <input type="file" name="banner_section_banner_image" id="logo_light" class="dropify" data-default-file="{{ asset(setting('banner_section_banner_image') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
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

        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Header Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_facebook">Facebook Url</label>
                                    <input type="text" name="top_header_section_facebook" id="top_header_section_facebook" class="form-control" value="{{ setting('top_header_section_facebook') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_twitter">Twitter Url</label>
                                    <input type="text" name="top_header_section_twitter" id="top_header_section_twitter" class="form-control" value="{{ setting('top_header_section_twitter') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_linked_in">Linked In Url</label>
                                    <input type="text" name="top_header_section_linked_in" id="top_header_section_linked_in" class="form-control" value="{{ setting('top_header_section_linked_in') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_google">Google Plus Url</label>
                                    <input type="text" name="top_header_section_google" id="top_header_section_google" class="form-control" value="{{ setting('top_header_section_google') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_from_day">From Day</label>
                                    <input type="text" name="top_header_section_from_day" id="top_header_section_from_day" class="form-control" value="{{ setting('top_header_section_from_day') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_to_day">To Day</label>
                                    <input type="text" name="top_header_section_to_day" id="top_header_section_to_day" class="form-control" value="{{ setting('top_header_section_to_day') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_start_time">Start Time</label>
                                    <input type="text" name="top_header_section_start_time" id="top_header_section_start_time" class="form-control" value="{{ setting('top_header_section_start_time') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_end_time">End Time</label>
                                    <input type="text" name="top_header_section_end_time" id="top_header_section_end_time" class="form-control" value="{{ setting('top_header_section_end_time') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_quick_contact_title">Contact Title</label>
                                    <input type="text" name="top_header_section_quick_contact_title" id="top_header_section_quick_contact_title" class="form-control" value="{{ setting('top_header_section_quick_contact_title') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_get_quote_text">Get A Quote Text</label>
                                    <input type="text" name="top_header_section_get_quote_text" id="top_header_section_get_quote_text" class="form-control" value="{{ setting('top_header_section_get_quote_text') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="top_header_section_quick_contact_number">Contact Number</label>
                                    <input type="text" name="top_header_section_quick_contact_number" id="top_header_section_quick_contact_number" class="form-control" value="{{ setting('top_header_section_quick_contact_number') }}" autocomplete="off">
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

        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">FAQ Page Banner Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="faq_page_banner_heading_text">Banner Heading Text</label>
                                    <input type="text" name="faq_page_banner_heading_text" id="faq_page_banner_heading_text" class="form-control" value="{{ setting('faq_page_banner_heading_text') }}" autocomplete="off">
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

        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Footer Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="footer_section_copyright_text">Copyright Text</label>
                                    <input type="text" name="footer_section_copyright_text" id="footer_section_copyright_text" class="form-control" value="{{ setting('footer_section_copyright_text') }}" autocomplete="off">
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
