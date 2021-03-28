@extends('backend.layouts.app')
@section('content')
<div class="ibox ">
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="ibox-title">
        <h5>Admin Account Information</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" placeholder="Name" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" placeholder="Password" class="form-control" name="password" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Repeat Password</label>
                <div class="col-lg-10">
                    <input type="password" placeholder="Password" class="form-control" name="password_confirmation">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-sm btn-white" type="submit">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
