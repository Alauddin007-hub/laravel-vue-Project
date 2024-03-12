<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'total_item',
        'total_price',
        'discount',
        'paid',
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}

// supplier_id 	total_item 	total_price 	discount 	paid
