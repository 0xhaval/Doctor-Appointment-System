<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_patient', 'patient_id', 'doctor_id');
    }

    public function medicalLab()
    {
        return $this->belongsToMany(MedicalLab::class, 'medical_patient', 'patient_id', 'medical_lab_id');
    }
}
