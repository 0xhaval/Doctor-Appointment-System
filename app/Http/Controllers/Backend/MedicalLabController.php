<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MedicalLab;
use Illuminate\Http\Request;

class MedicalLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.medicals.index', [
            'medicalLabs' => MedicalLab::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.medicals.create');
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
            'name' => 'required',
            'status' => 'required',
            'days' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'note' => 'nullable',
            'patient_count' => 'required'
        ]);

        $days = $request->days;
        $data['days'] = implode(',', $days);

        MedicalLab::create($data);
        return $this->redirectRoute('admin.medical.index', 'Medical Lab account is created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalLab $medical)
    {
        return view('backend.medicals.show', compact('medical'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalLab $medical)
    {
        return view('backend.medicals.update', compact('medical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalLab $medical)
    {
        $data = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'days' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'note' => 'nullable',
            'patient_count' => 'required'
        ]);

        $days = $request->days;
        $data['days'] = implode(',', $days);

        $medical->update($data);
        return $this->redirectRoute('admin.medical.index', 'Medical Lab account is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalLab $medical)
    {
        $medical->delete();
        return $this->redirectRoute('admin.medical.index', 'Medical Lab account is deleted successfully');
    }
}
