<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modules extends Model {
    use HasFactory;

    protected $fillable = [
        'titleModules',
        'keyFramework'
    ];

    //Modules ini berelasi one to many dari SubModules
    public function subModules(): HasMany{
        return $this->hasMany(SubModules::class);
    }

    //Modules ini berelasi many to many ke Certifications
    public function certifications(): BelongsToMany{
        return $this->belongsToMany(Certifications::class);
    }

    //modules ini berelasi many to many ke Frameworks
    public function frameworks(): BelongsToMany{
        return $this->belongsToMany(Frameworks::class);
    }
}
