<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\UserType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";

    protected $casts = [
        'type' => UserType::class,
    ];

    public function user() :BelongsTo
    {
       return $this->belongsTo(User::class);
    }
}
