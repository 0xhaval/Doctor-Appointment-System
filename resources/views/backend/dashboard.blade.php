@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-success float-right">Monthly</span>
                <h5>Doctors</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $doctors->count() }}</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total income</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-info float-right">Annual</span>
                <h5>Patients</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $patients->count() }}</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>New orders</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-primary float-right">Today</span>
                <h5>Appointments</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $appointments->count() }}</h1>
                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                <small>New visits</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-danger float-right">Low value</span>
                <h5>Medical Lab</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $medicals->count() }}</h1>
                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                <small>In first month</small>
            </div>
        </div>
    </div>
</div>
@endsection
