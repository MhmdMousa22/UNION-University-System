<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'gender', 'address', 'email', 'birthdate', 'status', 'doctor_id', 'course_id'
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
