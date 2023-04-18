<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    protected $guarded = [];
    
    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function Products():HasMany
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
}
