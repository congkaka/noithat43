<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $table = 'products';
    protected $casts = [
        'image' => 'array',
        'type' => 'array',
        'size' => 'array',
    ];

    // protected $fillable = ['name','price','type','size','exist','detail','category_id','status'];
    public function category(){
    	return $this->belongsTo('App\Category','category_id');
    }
}
