@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS - Home Page')
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
                        <h5 class="card-title">Making House Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_image">Section Image</label>
                                    <input type="file" name="making_house_section_image" id="favicon" class="dropify" data-default-file="{{ asset(setting('making_house_section_image') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_sub_image_one">Section Sub Image 1</label>
                                    <input type="file" name="making_house_section_sub_image_one" id="favicon" class="dropify" data-default-file="{{ asset(setting('making_house_section_sub_image_one') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_sub_image_two">Section Sub Image 2</label>
                                    <input type="file" name="making_house_section_sub_image_two" id="favicon" class="dropify" data-default-file="{{ asset(setting('making_house_section_sub_image_two') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_sub_image_three">Section Sub Image 3</label>
                                    <input type="file" name="making_house_section_sub_image_three" id="favicon" class="dropify" data-default-file="{{ asset(setting('making_house_section_sub_image_three') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_sub_image_four">Section Sub Image 4</label>
                                    <input type="file" name="making_house_section_sub_image_four" id="favicon" class="dropify" data-default-file="{{ asset(setting('making_house_section_sub_image_four') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_main_title">Main Title</label>
                                    <input type="text" name="making_house_section_main_title" id="making_house_section_main_title" class="form-control" value="{{ setting('making_house_section_main_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_sub_title">Sub Title</label>
                                    <input type="text" name="making_house_section_sub_title" id="making_house_section_sub_title" class="form-control" value="{{ setting('making_house_section_sub_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_description">Description</label>
                                    <input type="text" name="making_house_section_description" id="making_house_section_description" class="form-control" value="{{ setting('making_house_section_description') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_information_one">Point One Text</label>
                                    <input type="text" name="making_house_section_information_one" id="making_house_section_information_one" class="form-control" value="{{ setting('making_house_section_information_one') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_information_two">Point Two Text</label>
                                    <input type="text" name="making_house_section_information_two" id="making_house_section_information_two" class="form-control" value="{{ setting('making_house_section_information_two') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_information_three">Point Three Text</label>
                                    <input type="text" name="making_house_section_information_three" id="making_house_section_information_three" class="form-control" value="{{ setting('making_house_section_information_three') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_information_four">Point Four Text</label>
                                    <input type="text" name="making_house_section_information_four" id="making_house_section_information_four" class="form-control" value="{{ setting('making_house_section_information_four') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="making_house_section_button_title">Button Title</label>
                                    <input type="text" name="making_house_section_button_title" id="making_house_section_button_title" class="form-control" value="{{ setting('making_house_section_button_title') ?? '' }}" autocomplete="off">
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
                        <h5 class="card-title">Get Started Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="get_started_section_image">Section Image</label>
                                    <input type="file" name="get_started_section_image" id="favicon" class="dropify" data-default-file="{{ asset(setting('get_started_section_image') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="get_started_section_heading_text">Section Heading Text</label>
                                    <input type="text" name="get_started_section_heading_text" id="get_started_section_heading_text" class="form-control" value="{{ setting('get_started_section_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="get_started_section_button_title">Button Title</label>
                                    <input type="text" name="get_started_section_button_title" id="get_started_section_button_title" class="form-control" value="{{ setting('get_started_section_button_title') ?? '' }}" autocomplete="off">
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
                        <h5 class="card-title">Request An Estimate Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_main_title">Main Title</label>
                                    <input type="text" name="estimate_section_main_title" id="estimate_section_main_title" class="form-control" value="{{ setting('estimate_section_main_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_sub_title">Sub Title</label>
                                    <input type="text" name="estimate_section_sub_title" id="estimate_section_sub_title" class="form-control" value="{{ setting('estimate_section_sub_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_description_text">Description Text</label>
                                    <input type="text" name="estimate_section_description_text" id="estimate_section_description_text" class="form-control" value="{{ setting('estimate_section_description_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_heading_one_text">Heading 1 Text</label>
                                    <input type="text" name="estimate_section_heading_one_text" id="estimate_section_heading_one_text" class="form-control" value="{{ setting('estimate_section_heading_one_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_description_one_text">Description 1 Text</label>
                                    <input type="text" name="estimate_section_description_one_text" id="estimate_section_description_one_text" class="form-control" value="{{ setting('estimate_section_description_one_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_heading_two_text">Heading 2 Text</label>
                                    <input type="text" name="estimate_section_heading_two_text" id="estimate_section_heading_two_text" class="form-control" value="{{ setting('estimate_section_heading_two_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_description_two_text">Description 2 Text</label>
                                    <input type="text" name="estimate_section_description_two_text" id="estimate_section_description_two_text" class="form-control" value="{{ setting('estimate_section_description_two_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_heading_three_text">Heading 3 Text</label>
                                    <input type="text" name="estimate_section_heading_three_text" id="estimate_section_heading_three_text" class="form-control" value="{{ setting('estimate_section_heading_three_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="estimate_section_description_three_text">Description 3 Text</label>
                                    <input type="text" name="estimate_section_description_three_text" id="estimate_section_description_three_text" class="form-control" value="{{ setting('estimate_section_description_three_text') ?? '' }}" autocomplete="off">
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
                        <h5 class="card-title">Clients & Projects Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="logo_light">Section Image</label>
                                    <input type="file" name="client_section_background_image" id="logo_light" class="dropify" data-default-file="{{ asset(setting('client_section_background_image') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="clients_section_main_title">Main Title Text</label>
                                    <input type="text" name="clients_section_main_title" id="clients_section_main_title" class="form-control" value="{{ setting('clients_section_main_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="clients_section_project_done_text">Project Done Text</label>
                                    <input type="text" name="clients_section_project_done_text" id="clients_section_project_done_text" class="form-control" value="{{ setting('clients_section_project_done_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="clients_section_project_done_total">Total Projects Done</label>
                                    <input type="text" name="clients_section_project_done_total" id="clients_section_project_done_total" class="form-control" value="{{ setting('clients_section_project_done_total') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="clients_section_happy_client_text">Happy Client Text</label>
                                    <input type="text" name="clients_section_happy_client_text" id="clients_section_happy_client_text" class="form-control" value="{{ setting('clients_section_happy_client_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="clients_section_happy_client_total">Total Happy Clients</label>
                                    <input type="text" name="clients_section_happy_client_total" id="clients_section_happy_client_total" class="form-control" value="{{ setting('clients_section_happy_client_total') ?? '' }}" autocomplete="off">
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
                        <h5 class="card-title">Testimonial Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="testimonial_section_title">Section Main Title</label>
                                    <input type="text" name="testimonial_section_title" id="testimonial_section_title" class="form-control" value="{{ setting('testimonial_section_title') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="testimonial_section_sub_title">Section Sub Title</label>
                                    <input type="text" name="testimonial_section_sub_title" id="testimonial_section_sub_title" class="form-control" value="{{ setting('testimonial_section_sub_title') ?? '' }}" autocomplete="off">
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
