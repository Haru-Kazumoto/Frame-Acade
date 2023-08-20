<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubModules extends Model
{
    use HasFactory;

    protected $fillable = [
        'subModuleTitle',
    ];

    //SubModules ini berelasi many to one ke Modules
    public function modules(): BelongsTo{
        return $this->belongsTo(Modules::class);
    }
}
