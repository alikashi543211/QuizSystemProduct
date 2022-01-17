@extends('layouts.front')

@section('title', 'Login')

@section('css') 
	
	<style>
		.menu-layout1
		{
			box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 20%);
		}
	</style>

@endsection

@section('content')
	<section class="section-padding-lg-9-9">
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 sidebar-break-md sidebar-widget-area">
			        <div class="widget widget-contact-form">
			            <div class="heading-layout4">
			                <h4>Login</h4>
			            </div>
			            <form method="POST" action="{{ route('front.login') }}" class="contact-form-box login-form">
			                @csrf
			                <div class="row">
			                    <div class="col-12 form-group my-3">
			                        <div class="form-icon"><i class="far fa-envelope"></i></div>
			                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" value="{{ old('email') }}" required>
			                        <span class="invalid-feedback" role="alert">
		                                @error('email')
		                                    <strong>{{ $message }}</strong>
		                                @enderror
		                            </span>
			                        <div class="help-block with-errors"></div>
			                    </div>
			                    <div class="col-12 form-group my-3">
			                        <div class="form-icon"><i class="fas fa-lock"></i></div>
			                        <input type="password" placeholder="Password" class="form-control" name="password" data-error="Password field is required" required>
			                        <span class="invalid-feedback" role="alert">
		                                @error('password')
		                                    <strong>{{ $message }}</strong>
		                                @enderror
		                            </span>
			                        <div class="help-block with-errors"></div>
			                    </div>
			                    <div class="col-12 form-group my-3">
			                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Login</button>
			                    </div>
			                </div>
			                <div class="form-response"></div>
			            </form>
			        </div>
			    </div>
			    <div class="col-lg-4"></div>
			</div>
		</div>
	</section>
@endsection

@section('js') 

	<script>
		loginValidate();
	</script>

@endsection