<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient', 'doctor_id', 'patient_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
