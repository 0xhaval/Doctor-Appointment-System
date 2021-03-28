@extends('backend.layouts.app')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Update Appointment</h5>
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
        <form id="form" action="{{ route('admin.appointment.update', $appointment->id) }}" method="POST" class="wizard-big">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
                <h2>Appointment Information</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="doctor" {{ $appointment->type == 'doctor' ? 'selected' : '' }}>Doctor</option>
                                <option value="Lab" {{ $appointment->type == 'Lab' ? 'selected' : '' }}>Lab</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select Day</label>
                            <input value="{{ $appointment->day }}" type="date" name="day" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="time">Select Time</label>
                            <input value="{{ $appointment->time }}" type="time" name="time" id="time" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone">Appointment Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="0" {{ (!$appointment->status) ? 'selected' : '' }}>Closed</option>
                                <option value="1" {{ ($appointment->status) ? 'selected' : '' }}>Opened</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="patient_id">Select Patient</label>
                            <select name="patient_id" id="patient_id" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}" {{ ($appointment->patient_id == $patient->id) ? 'selected' : '' }}>{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="doctor_id">Select Doctor</label>
                            <select name="doctor_id" id="doctor_id" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($doctors as $doctor)
                                    @if ($doctor->status)
                                        <option value="{{ $doctor->id }}" {{ ($appointment->doctor_id == $doctor->id) ? 'selected' : '' }}>{{ $doctor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="medical_lab_id">Select Medical Lab</label>
                            <select name="medical_lab_id" id="medical_lab_id" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($medicals as $medical)
                                    @if ($medical->status)
                                        <option value="{{ $medical->id }}" {{ ($appointment->medical_lab_id == $medical->id) ? 'selected' : '' }}>{{ $medical->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5">
                                {{ $appointment->note }}
                            </textarea>
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
