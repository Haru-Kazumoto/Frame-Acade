<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modules extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id'
    ];    

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Modules ini berelasi one to many dari Submodules
    public function subModules(): HasMany{
        return $this->hasMany(Submodules::class,"module_id","id");
    }
}
