<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'product_quantity',
        'maincategory_subcategory_id'
    ];

    public function categoryRelation()
    {
        return $this->belongsTo(MainCategorySubCategory::class, 'maincategory_subcategory_id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
