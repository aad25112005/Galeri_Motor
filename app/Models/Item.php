<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'category_id',
        'image',
        'description',
        'brand'
    ];

    public function category()
    {
        return $this -> belongsTo(category:: class);
    }
}
