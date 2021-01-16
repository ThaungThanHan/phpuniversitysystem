<?php

namespace App\Models;

use App\Models\Department;
use App\Models\AcademicYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function academicyear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
