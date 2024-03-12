<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalamount',
        'customer_id',
        'coupon_discount',
        'status',
        'payment_method',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}

// totalamount 	customer_id 	coupon_discount 	status 	payment_method
