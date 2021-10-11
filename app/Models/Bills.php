<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = ["BillID","UserID","Name","Phone","Address","Email"];
    public function Bill() {
        return $this->belongsTo(User::class);
    }

}
