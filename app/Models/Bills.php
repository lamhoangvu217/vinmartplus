<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = ["id","Name","Phone","Address","Email","Status"];
    public function Bill() {
        return $this->belongsTo(User::class);
    }

}
