<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_id', 'product_id', 'quantity',
    ];
    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
