<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    public function stream(): BelongsTo {
        return $this->belongsTo(Stream::class);
    }

    public function classTeacher(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function classPrefect(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
