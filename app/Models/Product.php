<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Classification;
use App\Models\Stock;
use App\Models\Cart;
use App\Models\Orders;

class Product extends Model
{
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
    public function cart()
    {
      return $this->hasOne(Cart::class);
    }
    public function orders()
    {
      return $this->hasMany(Orders::class);
    }

}
