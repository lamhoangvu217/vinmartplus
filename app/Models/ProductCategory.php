<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ["id", "name", "description"];
    public function products() {
        return $this->hasMany(Product::class);
    } 
}
