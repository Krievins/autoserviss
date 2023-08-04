<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;


    public function marks() {
        return $this->hasMany(Marks::class);
    }

    public function cars() {
        return $this->belongsTo(Cars::class, 'car_id');
    }
    
}
