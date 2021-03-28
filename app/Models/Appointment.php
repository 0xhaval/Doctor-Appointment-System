<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicalLab()
    {
        return $this->belongsTo(MedicalLab::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOpen($query)
    {
        return $query->where('status', '=', true);
    }
}
