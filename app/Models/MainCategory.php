<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['main_category_name'];

    public function subcategories()
    {
        return $this->belongsToMany(SubCategory::class, 'maincategory_subcategory');
    }
}
