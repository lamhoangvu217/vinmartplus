<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = ["id","Name","Phone","Address","Email","Status","total"];
    public function Bill() {
        return $this->belongsTo(User::class);
    }
    public function billdetails() {
        return $this->hasMany(billdetails::class);
    }
}
