<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model {
    use HasFactory;

    protected $fillable = [
        "title",
        "message",
        "notifDate",
        "user_id"
    ];

    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
