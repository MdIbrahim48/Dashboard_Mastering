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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.user.create') }}" class="mb-sm-0 font-size-18 btn btn-primary"><i class="fas fa-plus"></i> Add User</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All User</h4>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Edited By</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <img style="width:30px;height:30px;" src="{{asset('photo/profile_photo')}}/{{$user->image}}" alt="{{$user->image}}">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if ( $user->role == '1')
                                       <span class="badge bg-primary">Super Admin</span>
                                    @elseif ( $user->role == '2')
                                        <span class="badge bg-success">Admin</span>
                                    @else
                                        <span class="badge bg-info">Moderator</span>
                                    @endif
                                </td>
                                <td>
                                    @if ( $user->status == '1')
                                       <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">In Active</span>
                                    @endif
                                </td>
                                <td>{{ $user->created_by }}</td>
                                <td>{{ $user->edited_by ?? 'N/A' }}</td>
                                <td>
                                    @if (Auth::User()->id != $user->id)
                                    <a type="submit" href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
