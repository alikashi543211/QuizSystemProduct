@extends('layouts.admin')
@section('title', 'Edit Profile')
@section('nav-title', 'Edit Profile')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-categories">
                    <ul class="nav nav-pills nav-pills-rose nav-pills-icons" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" id="general-tab" href="#general" role="tablist">
                                <i class="material-icons">info</i> General Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" id="security-tab" href="#security" role="tablist">
                                <i class="material-icons">lock</i> Security
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space tab-subcategories">
                        <div class="tab-pane active" id="general">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.profile.general.update') }}" method="POST" class="admin-profile-validate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Name</label>
                                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('first_name') is-invalid @enderror" autocomplete="off">
                                                    <span class="invalid-feedback" role="alert">
                                                        @error('name')
                                                            <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email</label>
                                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" autocomplete="off">
                                                    <span class="invalid-feedback" role="alert">
                                                        @error('email')
                                                            <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-rose pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="security">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.profile.password.update')}}" class="admin-password-validate" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">New Password</label>
                                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" id="user-password">
                                                    <span class="invalid-feedback" role="alert">
                                                        @error('password')
                                                            <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="off" id="user-confirm-password">
                                                    <span class="invalid-feedback" role="alert">
                                                        @error('password_confirmation')
                                                            <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-rose pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            activaTab('{{ $tab }}');
        });

        function activaTab(tab){
            $('.nav-item a[href="#' + tab + '"]').tab('show');
        };

        // Custom functions
        adminPasswordValidate();
        adminProfileValidate();
    </script>
@endsection
