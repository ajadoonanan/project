<?php

namespace App\Models\points;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Point extends Model
{
    use HasFactory;

    /**
     * Get all of the points_multiplier for the Point.
     */
    public function points_multiplier(): HasMany
    {
        return $this->hasMany(PointsMultiplier::class, 'points_id');
    }
}
