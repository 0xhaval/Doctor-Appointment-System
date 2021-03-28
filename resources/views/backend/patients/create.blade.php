@extends('backend.layouts.app')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Create a New Patient account</h5>
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
        <form id="form" action="{{ route('admin.patient.store') }}" method="POST" class="wizard-big">
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
            <fieldset>
                <h2>Patient Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" name="phone" id="phone" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>

            </fieldset>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-primary btn-rounded btn-block">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
