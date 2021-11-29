
@extends('layouts.admin.auth.admin_auth')

@section('admin_auth_content')

 <div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Welcome Back !</h5>
        <p class="text-muted mt-2">Sign in to continue to Dason.</p>
    </div>
    @include('partials.toast')
    <form class="mt-4 pt-2" action="{{ route('admin.reset-password.submit-form') }}" method="POST">
        @csrf
        <div class="form-floating form-floating-custom mb-4">
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" value="{{ $email_info->email }}" class="form-control @error('email') is-invalid @enderror" id="input-username" placeholder=" Email Address">
            <label for="input-username"> Email Address</label>
            <div class="form-floating-icon">
               <i data-feather="users"></i>
            </div>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
            <input type="password" name="password" class="form-control pe-5 @error('password') is-invalid @enderror" id="password-input" placeholder="Enter Password">

            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
            </button>
            <label for="input-password">Password</label>
            <div class="form-floating-icon">
                <i data-feather="lock"></i>
            </div>
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
            <input type="password" name="password_confirmation" class="form-control pe-5 @error('password_confirmation') is-invalid @enderror" id="password-input" placeholder="Enter Confirm Password">

            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
            </button>
            <label for="input-password">Confirm Password</label>
            <div class="form-floating-icon">
                <i data-feather="lock"></i>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Update Password</button>
        </div>
    </form>


    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Don't have an account ? <a href="auth-register.html"
                class="text-primary fw-semibold"> Signup now </a> </p>
    </div>
</div>

@endsection
