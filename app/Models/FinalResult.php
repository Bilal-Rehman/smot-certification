<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FinalResult extends Model
{
    use HasFactory;

    public function machineResults(): HasMany
    {
        return $this->hasMany(MachineResult::class);
    }

    function applicant(): HasOne
    {
        return $this->hasOne(Applicant::class, 'id');
    }
}
