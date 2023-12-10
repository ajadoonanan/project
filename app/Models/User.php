<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $with = ['groups'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // ====================SCOPES====================
    public function scopeUpdatePointsExchanged(Builder $query, int $user_id, int $points = 0)
    {
        $query->where('id', $user_id)->decrement('total_points', $points);
    }

    public function scopeUpdateUserPointsGained(Builder $query, int $user_id, int $points = 0)
    {
        $query->where('id', $user_id)->increment('total_points', $points);
    }

    /**
     * The products that belong to the User.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'cart')
        ->withPivot('id', 'user_id', 'cart_quantity');
    }

    // ====================RELATIONSHIPS====================
    /**
     * Get all of the orders for the User.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function groups(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
