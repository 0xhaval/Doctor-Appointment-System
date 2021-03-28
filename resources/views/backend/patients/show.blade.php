@extends('backend.layouts.app')
@section('content')
<div class="row m-b-lg m-t-lg">
    <div class="col-md-12">
        <div class="">
            <div>
                <h2 class="no-margins">
                    <i class="fa fa-user-circle"></i>
                    {{ $patient->name }}
                </h2>

                <div>
                    <hr>
                    <i class="fa fa-mobile"></i>
                    <small class="badge badge-info">{{ $patient->phone }}</small>
                    <hr>
                </div>

                <div>
                    <i class="fa fa-address-book" ></i>
                    <small style="font-size: 13px">Address : {{ $patient->address }}</small>
                    <hr>
                </div>

                <div>
                    <div class="widget style1 navy-bg">
                        Notes
                        <div class="row vertical-align p-3">
                            <h4>{{ $patient->note }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
