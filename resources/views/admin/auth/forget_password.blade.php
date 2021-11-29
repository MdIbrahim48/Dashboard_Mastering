
@extends('layouts.admin.auth.admin_auth')

@section('admin_auth_content')

<div class="auth-content my-auto">
    @include('partials.toast')
    <form class="mt-4 pt-2" action="{{route('admin.forget.password.post')}}" method="POST">
        @csrf
        <div class="form-floating form-floating-custom mb-4">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="input-username" placeholder="Enter Email Address">
            <label for="input-username">Email Address</label>
            <div class="form-floating-icon">
               <i data-feather="users"></i>
            </div>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Send Reset Instructions</button>
        </div>
    </form>
    <div class="mt-5 text-center">
        <p class="text-muted mb-0"><a href="{{ route('admin.login') }}"
                class="text-primary fw-semibold"> Sign In </a> </p>
    </div>
</div>

@endsection
