<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'shiping_address',
        'product_id',
        'product_qty',
        'product_price',
        'product_subtotal',
        'product_discount',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function medicine(){
        return $this->belongsTo(Medicine::class);
    }
}

// order_id 	shiping_address 	product_id 	product_qty 	product_price 	product_subtotal 	product_discount
