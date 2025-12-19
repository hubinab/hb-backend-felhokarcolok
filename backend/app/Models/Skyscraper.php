<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skyscraper extends Model
{
    // AI
    // Ha itt ezt nem kapcsolod ki, akkor store-nal,
    // mindenkep felakar vinni created_at mezot!
    public $timestamps = false;

    protected $fillable = [
        "name",
        "height",
        "stories",
        "finished",
        "city_id",
    ];

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
