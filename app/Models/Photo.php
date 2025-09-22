<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_name','photo_path','mime_type','photoable_id','photoable_type'
    ];

    public function photoable()
    {
        return $this->morphTo();
    }
}
