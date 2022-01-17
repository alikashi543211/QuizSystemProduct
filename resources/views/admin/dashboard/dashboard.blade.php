@extends('layouts.admin')
@section('title', 'Dashboard')
@section('nav-title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">category</i></div>
                    <p class="card-category">Questions</p>
                    <h3 class="card-title">{{ $questions_count ?? '0' }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">category</i> Total # of Questions</div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon"><i class="material-icons">group</i></div>
                    <p class="card-category">Members</p>
                    <h3 class="card-title">{{ $students_count ?? '0' }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">group</i> Total # of Members</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon"><i class="material-icons">price_check</i></div>
                    <p class="card-category">Total Earning</p>
                    <h3 class="card-title"><small>PKR</small>{{ $earning_count ?? '0' }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">price_check</i> Total Earning</div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
