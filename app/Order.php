<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = "order_id";
    protected $fillable = [
        'order_id',
        'email',
        'order_date',
        'consignee_name',
        'consignee_add',
        'consignee_phone',
        'status',
    ];
}
