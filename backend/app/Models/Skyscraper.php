<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skyscraper extends Model
{
    protected $fillable = [
        "name",
        "height",
        "stories",
        "finished",
    ];

    public function cities():BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
