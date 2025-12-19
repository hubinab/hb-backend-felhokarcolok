<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $fillable = [
        "country_code",
        "name",
    ];

    public function skyscrapers():HasMany 
    {
        return $this->hasMany(Skyscraper::class, "city_id", "id");
    }
}
