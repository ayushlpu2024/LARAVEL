<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'dining_table_id',
        'order_total_price',
        'isPaid',
        'order_status',
        'customer_contacts',
    ];

    public function customerOrderDetail() : HasMany
    {
        return $this->hasMany(CustomerOrderDetail::class, 'order_id');
    }

    public function diningTable() : BelongsTo
    {
        return $this->belongsTo(DiningTable::class);
    }
}
