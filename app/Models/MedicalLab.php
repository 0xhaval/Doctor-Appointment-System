<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalLab extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'medical_patient', 'medical_lab_id', 'patient_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
