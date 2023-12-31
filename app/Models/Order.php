<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function payments(){
        return $this->hasOne(Order::class);
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
}
