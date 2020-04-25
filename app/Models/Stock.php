<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Classification;
use App\Models\Type;

class Stock extends Model
{
    public function product(){
       return $this->belongsTo(Product::class);
    }

    public function classification(){
        return $this->belongsTo(Classification::class,Product::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

  

}
