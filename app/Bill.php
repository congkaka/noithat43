<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    public function orderProduct()
    {
        return $this->belongsTo('App\OrderProduct', 'id', 'bill_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
