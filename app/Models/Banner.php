<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Poster extends Model
{
    use HasFactory;

    protected $table = "banners";

    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
