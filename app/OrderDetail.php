<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'price',
    ];
}
