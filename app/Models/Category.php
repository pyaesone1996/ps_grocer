<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];
    
    public function subCategories(): hasMany
    {
        return $this->hasMany(SubCategory::class);
    }

    use HasFactory;
}
