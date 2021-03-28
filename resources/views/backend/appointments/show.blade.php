@extends('backend.layouts.app')
@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<style>
    @media print {
  .noPrint{
    display:none;
  }
}

.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
.printPage{
    font-family: 'Cairo', sans-serif;
    text-align: right
}
</style>

<div class="row m-b-lg m-t-lg printPage">
    <div class="col-md-12" style="font-size: 20px">
        <div class="">
            <div class=" float-right">
                <button onclick="window.print();" class="noPrint btn btn-info text-black-50">
                    Print Me
                </button>
            </div>
            <div class="center" style="margin: auto 0">
                <img src="https://via.placeholder.com/150" alt="" class="displayed">
            </div>
            <div>
                <h2 class="no-margins" style="font-size: 30px" dir="rtl">
                    موعد {{ ($appointment->type == 'doctor') ? 'دكتور' : 'فحص مختبر' }}
                </h2>
                <div class="mt-1">
                    <small style="font-size: 13px"><small class="badge {{ ($appointment->status==1) ? 'badge-success' : 'badge-danger'  }}">{{ ($appointment->status==1) ? 'Opened' : 'Closed' }}</small></small>
                    <div>
                        <small>تاريخ انشاء الموعد {{ $appointment->created_at }}</small><br>
                        <small> {{ Auth::user()->name }} بواسطه </small>
                    </div>
                    <hr>
                </div>
                <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointment->day)->format('l - m/d/Y') }} : تاريخ موعد المريض  </p>
                <div>
                    <p> {{ date('h:i:s a ', strtotime($appointment->time)) }} : توقيت موعد المريض </p>
                </div>


                <div>
                    <hr>
                    <small style="font-size: 20px">{{ $appointment->patient->name }} : اسم المريض </small>
                    <hr>
                </div>

                <div>
                    <small style="font-size: 20px"> {{ $appointment->doctor->name }} : اسم الدكتور</small>
                    <hr>
                    <small style="font-size: 20px"> {{ $appointment->doctor->specialty }} : تخصص الدكتور</small>
                    <hr>
                </div>

                <div>
                    <small style="font-size: 20px"> {{ $appointment->medicalLab->name }} : اسم المختبر الصحي</small>
                    <hr>
                </div>


                <div>
                    <div class="widget style1 navy-bg">
                        ملاحظات
                        <div class="row vertical-align p-3" >
                            <h4 style="font-size: 20px">{{ $appointment->note }}</h4>
                        </div>
                    </div>
                </div>

                <div class=" text-center">
                    <h4 style="font-family: 'Cairo', sans-serif; font-size:20px">التوقيع والختم</h4>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
