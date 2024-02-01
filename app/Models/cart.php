<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo(product::class,'ItemID');
    }

    public function users(){
        return $this->belongsTo(User::class,'userId');
    }
}
