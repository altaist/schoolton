<?php

namespace App\Models;

use App\Constants\OrderState;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'state',
        'user_id',
        'orderable_id',
        'orderable_type',
        'price',
        'price_id',
        'json_data',
        'state',
    ];

    protected $casts = [
        'json_data' => 'array'
    ];

    public function orderable()
    {
        return $this->morphTo();
    }

    public function courses()
    {
        return $this->morphMany(Course::class, 'orderable');
    }

    public function products()
    {
        return $this->morphMany(Product::class, 'orderable');
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function scopeFilterByUserStateOrderable(Builder $query, $userId, $state, $orderableType = null)
    {
        return $query->forUser($userId)->forState($state)->forOrderable($orderableType);
    }

    public function scopeForUser(Builder $query, $userId, $strict = false)
    {
        return $query->when($userId !==null || $strict, fn($query) => $query->where('user_id', $userId));
    }

    public function scopeForState(Builder $query, $state, $strict = false)
    {
        return $query->when($state !==null || $strict, fn($query) => $query->where('state', $state));
    }

    public function scopeCreated(Builder $query)
    {
        return $query->where('state', OrderState::Created);
    }

    public function scopeInPayment(Builder $query)
    {
        return $query->where('state', OrderState::Payment);
    }

    public function scopeInWork(Builder $query)
    {
        return $query->where('state', OrderState::InWork);
    }

    public function scopeClosed(Builder $query)
    {
        return $query->where('state', OrderState::Closed);
    }

    public function scopeCompleted(Builder $query)
    {
        return $query->where('state', OrderState::Completed);
    }

    public function scopeOnlyInPayment(Builder $query)
    {
        return $query->where('state', OrderState::Payment);
    }

    public function scopeForOrderable(Builder $query, $orderableType, $orderableId, $strict = false)
    {
        return $query
            ->where('orderable_id', $orderableId)
            ->where('orderable_type', $orderableType);
    }
}
