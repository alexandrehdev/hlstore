<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        "status" => ProductStatus::class,
        "created_at" => "datetime:Y-m-d H:00",
    ];
    
    public function isPublic(): bool
    {
        return $this->status === ProductStatus::PUBLIC;
    }

    public function readableCreatedAt()
    {
        return $this->created_at->diffForHumans(Carbon::now(),CarbonInterface::DIFF_ABSOLUTE);
    }
    
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
