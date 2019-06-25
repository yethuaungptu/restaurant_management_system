<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function staff(){
        return $this->belongsTo(Staff::class);
    }
}
