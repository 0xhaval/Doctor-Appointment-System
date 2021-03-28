<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\MedicalLab;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminHome()
    {
        return view('backend.dashboard',[
            'doctors' => Doctor::all(),
            'patients' => Patient::all(),
            'appointments' => Appointment::all(),
            'medicals' => MedicalLab::all()
        ]);
    }

}
