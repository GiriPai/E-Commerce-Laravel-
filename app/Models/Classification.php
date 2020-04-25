<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Stock;

class Classification extends Model
{
   protected $table = 'classification';
   
   public function product()
   {
   		return $this->hasMany(Product::class);
   }
   public function stock()
   {
       return $this->hasManyThrough(Stock::class,Product::class);
   }

}
