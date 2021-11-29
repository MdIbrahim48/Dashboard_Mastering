@extends('layouts.admin.admin_app')
@section('admin_content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">All User</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.user.index') }}" class="mb-sm-0 font-size-18 btn btn-primary">All User</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">Add User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    {{-- @include('partials.toast') --}}
                                    {!! Toastr::message() !!}
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" required/>
                                                    @error('name')
                                                        <span class="text text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email" required/>
                                                    @error('email')
                                                        <span class="text text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter Password" required/>
                                                    @error('password')
                                                        <span class="text text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="Confirm Password" required/>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">User Role</label>
                                                    <select name="role" id="" class="form-control">
                                                        <option value="">---Select Role---</option>
                                                        <option value="1">Super Admin</option>
                                                        <option value="2">Admin</option>
                                                        <option value="3">Moderator</option>
                                                    </select>
                                                 </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value>---Select Status---</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">InActive</option>
                                                    </select>
                                                 </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Image</label>
                                                    <input type="file" name="image" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@section('admin_scripts')
@if (Session::has('alert-success'))
<script>
    toastr.success("{!! Session::get('alert-success') !!}");
</script>
@endif

@endsection

@endsection
