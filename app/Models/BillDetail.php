<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
        'bill_id','product_id','qty','discount','total'
    ];
    
}
