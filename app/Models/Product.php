<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["id", "name", "detail", "thumbnail", "usage", "price", "qty", "product_category_id", "promotion_id"];
    public function product_category() {
        return $this->belongsTo(ProductCategory::class);
    }
    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }
    public function images() {
        return $this->hasMany(ProductImage::class);
    }
    public function billdetails() {
        return $this->hasMany(BillDetail::class);
    }
}
