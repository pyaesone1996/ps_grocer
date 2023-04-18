<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderDetails extends Model
{
    protected $guarded = [];
    
    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function Invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    use HasFactory;
}
