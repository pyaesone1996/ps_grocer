<?php

namespace App\Models;

use App\Models\SubCategory;
use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $guarded = [];
    
    public function SubCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function Inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    use HasFactory;
}
