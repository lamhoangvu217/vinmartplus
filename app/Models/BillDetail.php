<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
        'bill_id','product_id','qty','discount','total'
    ];

    public function bill() {
        return $this->belongsTo(Bill::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
