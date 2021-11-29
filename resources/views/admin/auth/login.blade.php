
@extends('layouts.admin.auth.admin_auth')

@section('admin_auth_content')

<div class="auth-content my-auto">
    {{-- <div class="text-center">
        <h5 class="mb-0">Welcome Back !</h5>
        <p class="text-muted mt-2">Sign in to continue to Dason.</p>
    </div> --}}
    @include('partials.toast')
    <form class="mt-4 pt-2" action="{{route('admin.login.authenticate')}}" method="POST">
        @csrf
        <div class="form-floating form-floating-custom mb-4">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="input-username" placeholder="Enter User Name">
            <label for="input-username">Username</label>
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

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-check font-size-15">
                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label font-size-13" for="remember">
                        Remember me
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check font-size-15">
                   <a href="{{ route('admin.forget.password') }}">Forget Password</a>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button style="background-color: #3bb77e" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>

    {{-- <div class="mt-4 pt-2 text-center">
        <div class="signin-other-title">
            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
        </div>

        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-primary text-white border-primary">
                    <i class="mdi mdi-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-info text-white border-info">
                    <i class="mdi mdi-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-danger text-white border-danger">
                    <i class="mdi mdi-google"></i>
                </a>
            </li>
        </ul>
    </div> --}}

</div>

@endsection
