<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Product;
use App\Models\Orders;

class Category extends Model
{
    protected $table = 'categories';

    public function type()
    {
        return $this->hasMany(Type::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    // public function product()
    // {
    //     return $this->hasMany(Product::class);
    // }
    public function orders()
    {
    	return $this->hasMany(Orders::class);
    }

}
