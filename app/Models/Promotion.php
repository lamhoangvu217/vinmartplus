<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ["id", "name", "description", "percent"];

    public function products() {
        return $this->hasMany(Product::class);
    } 
}
