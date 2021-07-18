<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\MedicalLab;
use App\Models\Patient;
use Faker\Provider\Medical;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.appointments.index', [
            'appointments' => Appointment::latest()->get(),
            'medicals' => MedicalLab::all(),
            'doctors' => Doctor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.appointments.create',[
            'doctors' => Doctor::all(),
            'patients' => Patient::all(),
            'medicals' => MedicalLab::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'day' => 'required',
            'time' => 'required',
            'status' => 'required',
            'patient_id' => 'required',
            'user_id' => 'required',
            'doctor_id' => 'nullable',
            'medical_lab_id' => 'nullable',
            'note' => 'nullable'
        ]);

        Appointment::create($data);
        return $this->redirectRoute('admin.appointment.index', 'Appointment is created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('backend.appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        return view('backend.appointments.update', [
            'doctors' => Doctor::all(),
            'patients' => Patient::all(),
            'medicals' => MedicalLab::all(),
            'appointment' => $appointment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $data = $request->validate([
            'type' => 'required',
            'day' => 'required',
            'time' => 'required',
            'status' => 'required',
            'patient_id' => 'required',
            'user_id' => 'required',
            'doctor_id' => 'nullable',
            'medical_lab_id' => 'nullable',
            'note' => 'nullable'
        ]);

        $appointment->update($data);
        return $this->redirectRoute('admin.appointment.index', 'Appointment is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return $this->redirectRoute('admin.appointment.index', 'Appointment is deleted successfully');
    }
}
