<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses  extends Model {
    use HasFactory,SoftDeletes;

    protected $table = "courses";

    protected $fillable = [
        'name',
        'type',
        'description',
        'logo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function modules() : HasMany {
        return $this->hasMany(Modules::class,"course_id","id");
    }

}
