@extends('backend.layouts.app')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Update Medical Lab</h5>
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
        <form id="form" action="{{ route('admin.medical.update', $medical->id) }}" method="POST" class="wizard-big">
            @csrf
            @method('PUT')
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
                <h2>Medical Lab Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $medical->name }}" type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input value="{{ $medical->address }}" type="text" name="address" id="address" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input value="{{ $medical->phone }}" type="number" name="phone" id="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Medical Lab Status <span><i> (is Availabe? )</i></span></label>
                            <select name="status" id="" class="form-control">
                                <option value="" disabled selected>Choose one</option>
                                <option value="0" {{ (!$medical->status) ? 'selected' : '' }}>Not Avaiable</option>
                                <option value="1" {{ ($medical->status) ? 'selected' : '' }}>Avaiable</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Availabe Days </label>
                            <p class="badeg badge-primary p-2 font-bold">{{ $medical->days }}</p>
                            <select name="days[]" id="" class="form-control" multiple size="6">
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thuresday">Thuresday</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Patient Count *</label>
                            <input value="{{ $medical->patient_count }}" id="patient_count" name="patient_count" type="number" class="form-control required">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ $medical->note }}</textarea>
                        </div>
                    </div>
                </div>

            </fieldset>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary btn-rounded btn-block">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
