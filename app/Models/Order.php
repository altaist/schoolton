<?php

namespace App\Models;

use App\Constants\OrderState;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'email',
        'gender',
        'birth_date',
        'birth_time',
        'birth_city',
        'amount',
        'status',
        'expires_at',
        'payment_method',
        'payment_fee',
        'payer_email'
    ];

    protected $casts = [
        'json_data' => 'array',
        'expires_at' => 'datetime'
    ];

    protected $table = 'natal_orders';

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($order) {
            $order->order_id = (string) Str::uuid();
        });
    }

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

    protected function displayId(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->id + 1000,
        );
    }
}
