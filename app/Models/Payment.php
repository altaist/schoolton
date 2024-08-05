<?php

namespace App\Models;

use App\Constants\PaymentState;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'state',
        'order_id',
        'sum',
        'json_data',
        'state'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('state', PaymentState::Active);
    }

    public function scopeCompleted(Builder $query)
    {
        return $query->where('state', PaymentState::Completed);
    }

    public function scopeClosed(Builder $query)
    {
        return $query->where('state', PaymentState::Completed);
    }

}
