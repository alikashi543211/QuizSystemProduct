@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS - About Page')
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
                        <h5 class="card-title">About Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="">Section Right Image</label>
                                    <input type="file" name="about_section_right_image" id="favicon" class="dropify" data-default-file="{{ asset(setting('about_section_right_image') ?? '') }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_main_title_text">Main Title</label>
                                    <input type="text" name="about_section_main_title_text" id="about_section_main_title_text" class="form-control" value="{{ setting('about_section_main_title_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_paragraph_1_text">Paragraph 1 Text</label>
                                    <input type="text" name="about_section_paragraph_1_text" id="about_section_paragraph_1_text" class="form-control" value="{{ setting('about_section_paragraph_1_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_paragraph_2_text">Paragraph 2 Text</label>
                                    <input type="text" name="about_section_paragraph_2_text" id="about_section_paragraph_2_text" class="form-control" value="{{ setting('about_section_paragraph_2_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_point_1_heading_text">Point 1 Heading Text</label>
                                    <input type="text" name="about_section_point_1_heading_text" id="about_section_point_1_heading_text" class="form-control" value="{{ setting('about_section_point_1_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_point_1_description_text">Point 1 Description Text</label>
                                    <input type="text" name="about_section_point_1_description_text" id="about_section_point_1_description_text" class="form-control" value="{{ setting('about_section_point_1_description_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_point_2_heading_text">Point 2 Heading Text</label>
                                    <input type="text" name="about_section_point_2_heading_text" id="about_section_point_2_heading_text" class="form-control" value="{{ setting('about_section_point_2_heading_text') ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="about_section_point_2_description_text">Point 2 Description Text</label>
                                    <input type="text" name="about_section_point_2_description_text" id="about_section_point_2_description_text" class="form-control" value="{{ setting('about_section_point_2_description_text') ?? '' }}" autocomplete="off">
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
