<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.doctors.index', [
            'doctors' => Doctor::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctors.create');
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
            'name' => 'required|max:255',
            'patient_count' => 'required',
            'email' => 'nullable|email',
            'phone1' => 'required',
            'phone2' => 'nullable',
            'specialty' => 'required',
            'edu' => 'nullable',
            'note' => 'nullable',
            'address' => 'required',
            'status' => 'required|in:0,1',
            'days' => 'required',
            'start_time' => 'nullable',
            'end_time' => 'nullable'
        ]);

        $days = $request->days;
        $data['days'] = implode(',', $days);

        Doctor::create($data);
        return $this->redirectRoute('admin.doctor.index', 'Doctor account is created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('backend.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('backend.doctors.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Doctor $doctor)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'patient_count' => 'required',
            'email' => 'nullable|email',
            'phone1' => 'required',
            'phone2' => 'nullable',
            'specialty' => 'required',
            'edu' => 'nullable',
            'note' => 'nullable',
            'address' => 'required',
            'status' => 'required|in:0,1',
            'days' => 'required',
            'start_time' => 'nullable',
            'end_time' => 'nullable'
        ]);

        $days = $request->days;
        $data['days'] = implode(',', $days);

        $doctor->update($data);
        return $this->redirectRoute('admin.doctor.index', 'Doctor account is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return $this->redirectRoute('admin.doctor.index', 'Doctor account is deleted successfully');
    }
}
