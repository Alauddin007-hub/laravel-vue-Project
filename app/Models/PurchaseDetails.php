<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'medicine_id',
        'purchase',
        'price',
        'quantity',
        'subtotal',
    ];

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }

    public function medicine(){
        return $this->belongsTo(Medicine::class);
    }
}

// purchase_id 	medicine_id 	purchase 	price 	quantity 	subtotal
