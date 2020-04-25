<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
use App\User;


class Orders extends Model
{
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function product()
  {
    return $this->belongsTo(Product::class);
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
