@extends('backend.layouts.app')
@section('content')
<div class="row m-b-lg m-t-lg">
    <div class="col-md-12">
        <div class="">
            <div>
                <h2 class="no-margins">
                    <i class="fa fa-user-circle"></i>
                    {{ $doctor->name }}
                </h2>
                <div class="mt-1">
                    <small style="font-size: 13px"><small class="badge {{ ($doctor->status==1) ? 'badge-success' : 'badge-danger'  }}">{{ ($doctor->status==1) ? 'Available' : 'Not Available' }}</small></small>
                    <hr>
                </div>
                <h4>{{ $doctor->specialty }}</h4>
                <div>
                    <small>{{ $doctor->email }}</small>
                </div>

                <div>
                    <i class="fa fa-mobile"></i>
                    <small class="badge badge-info">{{ $doctor->phone1 }}</small>
                </div>

                <div>
                    <i class="fa fa-mobile"></i>
                    <small class="badge badge-info">{{ $doctor->phone2 }}</small>
                    <hr>
                </div>

                <div>
                    <i class="fa fa-etsy" aria-hidden="true"></i>
                    <small style="font-size: 13px">Education : {{ $doctor->edu }}</small>
                    <hr>
                </div>

                <div>
                    <i class="fa fa-address-book" ></i>
                    <small style="font-size: 13px">Address : {{ $doctor->address }}</small>
                    <hr>
                </div>

                <div>
                    <i class="fa fa-calendar-o" ></i>
                    <small style="font-size: 13px" class="badge badge-pill">Avialble Days : {{ $doctor->days }}</small>
                    <hr>
                </div>

                <div>
                    <i class="fa fa-user-secret" ></i>
                    <small style="font-size: 13px" class="badge badge-pill">Patient Count : {{ $doctor->patient_count }}</small>
                    <hr>
                </div>

                <div>
                    <div class="widget style1 navy-bg">
                        Notes
                        <div class="row vertical-align p-3">
                            <h4>{{ $doctor->note }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
