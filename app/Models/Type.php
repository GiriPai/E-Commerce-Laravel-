<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Classification;
use App\Models\Stock;
use App\Models\Product;


class Type extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function stock()
    {
        return $this->hasManyThrough(Stock::class,Product::class);
    }
    public function product()
    {
    	return $this->hasMany(Product::class);
    }
    
}
