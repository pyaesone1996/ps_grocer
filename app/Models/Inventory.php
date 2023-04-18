<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inventory extends Model
{
    protected $guarded = [];
    
    public function Products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
