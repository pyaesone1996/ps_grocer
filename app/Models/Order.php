<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $guarded = [];
    
    public function Product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function OrderDetails(): HasOne
    {
        return $this->hasOne(OrderDetails::class);
    }
    use HasFactory;
}
