@extends('backend.layouts.app')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Update Doctor</h5>
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
        <form id="form" action="{{ route('admin.doctor.update', $doctor->id) }}" method="POST" class="wizard-big">
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
                <h2>Account Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $doctor->name }}" type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="{{ $doctor->email }}" type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone1">Phone Number 1</label>
                            <input value="{{ $doctor->phone1 }}" type="number" name="phone1" id="phone1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone2">Phone Number 2</label>
                            <input value="{{ $doctor->phone2 }}" type="number" name="phone2" id="phone2" class="form-control">
                        </div>
                    </div>
                </div>

            </fieldset>
            <fieldset>
                <h2>Education Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Specialty *</label>
                            <input value="{{ $doctor->specialty }}" id="specialty" name="specialty" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Education</label>
                            <input value="{{ $doctor->edu }}" id="edu" name="edu" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ $doctor->note }}</textarea>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h2>Appointment Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Address *</label>
                            <input value="{{ $doctor->address }}" id="address" name="address" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Doctor Status <span><i> (is Availabe? )</i></span></label>
                            <select name="status" id="" class="form-control">
                                <option value="" disabled selected>Choose one</option>
                                <option value="0" {{ (!$doctor->status) ? 'selected' : '' }}>Not Avaiable</option>
                                <option value="1" {{ ($doctor->status) ? 'selected' : '' }}>Avaiable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Patient Count *</label>
                            <input value="{{ $doctor->patient_count }}" id="patient_count" name="patient_count" type="number" class="form-control required">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Availabe Days </label>
                            <p class="badeg badge-primary p-2 font-bold">{{ $doctor->days }}</p>
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
                </div>

                {{--
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Start Time</label>
                            <input id="start_time" name="start_time" type="time" class="form-control required">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>End Time</label>
                            <input id="end_time" name="end_time" type="time" class="form-control required">
                        </div>
                    </div>
                </div>
                --}}
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
