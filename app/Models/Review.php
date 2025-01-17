<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    public function boba(): BelongsTo
    {
        return $this->belongsTo(Boba::class);
    }
}
