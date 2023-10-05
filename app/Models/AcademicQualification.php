<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicQualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree_name',
        'passign_year',
        'marks',
        'user_id',
    ];
}
