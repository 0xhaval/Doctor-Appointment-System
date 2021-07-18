@extends('backend.layouts.app')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Create a New Appointment</h5>
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
        <form id="form" action="{{ route('admin.appointment.store') }}" method="POST" class="wizard-big">
            @csrf
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
                                <option value="" disabled selected>Choose one..</option>
                                <option value="doctor">Doctor</option>
                                <option value="Lab">Lab</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select Day</label>
                            <input type="date" name="day" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="time">Select Time</label>
                            <input type="time" name="time" id="time" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone">Appointment Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                <option value="0">Closed</option>
                                <option value="1">Opened</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <hr>
                        <div class="form-group">
                            <label for="patient_id">Select Patient</label>
                            <select name="patient_id" id="patient_id" class="form-control ">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}" id="">{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <hr>
                            <label for="doctor_id">Select Doctor</label>
                            <select name="doctor_id" id="doctor_id" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($doctors as $doctor)
                                    @if ($doctor->status)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <hr>
                            <label for="medical_lab_id">Select Medical Lab</label>
                            <select name="medical_lab_id" id="medical_lab_id" class="form-control">
                                <option value="" disabled selected>Choose one..</option>
                                @foreach ($medicals as $medical)
                                    @if ($medical->status)
                                        <option value="{{ $medical->id }}">{{ $medical->name }}</option>
                                    @endif
                                @endforeach
                            </select>
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
@section('scripts')
<script>
    $('#patient_id').select2();
    $('#doctor_id').select2();
    $('#medical_lab_id').select2();
</script>
@endsection


