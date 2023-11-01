<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MachineResult extends Model
{
    use HasFactory;

    public function scores(): HasMany
    {
        return $this->hasMany(QuestionScore::class);
    }

    public function result(): HasOne
    {
        return $this->hasOne(FinalResult::class);
    }

    public function machineTypes(): HasOne
    {
        return $this->hasOne(MachineType::class);
    }
}
