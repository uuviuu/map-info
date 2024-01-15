<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HistoryRequest extends Authenticatable
{
    /** @var array<int, string> */
    protected $fillable = [
        'user_id',
        'text',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
