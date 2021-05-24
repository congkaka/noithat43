<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'orderdetails';
    protected $fillable = ['order_id','pro_id','type','size','quantity','price'];
}
