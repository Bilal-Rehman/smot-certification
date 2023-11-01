<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;

    // protected $table = ['applicants'];

    protected $fillable = [
        'applicant_name',
        'father_name',
        'date_of_birth',
        'cnic',
        'domicile',
        'gender',
        'cell_no',
        'residential_address',
        'permanent_address',
    ];

    public function academicQualifications(): HasMany
    {
        return $this->hasMany(AcademicQualification::class);
    }
    public function employmentRecords(): HasMany
    {
        return $this->hasMany(EmploymentRecord::class);
    }

    public function results(): HasMany
    {
        return $this->hasMany(FinalResult::class);
    }
}
