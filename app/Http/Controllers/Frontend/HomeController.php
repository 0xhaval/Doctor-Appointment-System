<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\MedicalLab;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home',[
            'doctors' => Doctor::all(),
            'patients' => Patient::all(),
            'medicals' => MedicalLab::all(),
            'appointments' => Appointment::all()
        ]);
    }
}
