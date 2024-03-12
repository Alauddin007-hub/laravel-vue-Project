<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'brand',
        'purchase_price',
        'discount',
        'selling_price',
        'photo',
        'stock',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

// name 	category_id 	brand 	purchase_price 	discount 	selling_price  photo	stock
