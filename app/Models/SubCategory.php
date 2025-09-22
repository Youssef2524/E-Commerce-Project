<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['sub_category_name'];

    public function maincategories()
    {
        return $this->belongsToMany(MainCategory::class, 'maincategory_subcategory');
    }
}
