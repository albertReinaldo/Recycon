<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyDetail extends Model
{
    use HasFactory;

    protected $table = 'history_detail';

    public function products(){
        return $this->belongsTo(product::class,'ItemID');
    }

    public function historys(){
        return $this->belongsTo(history::class,'historyId');
    }
}
