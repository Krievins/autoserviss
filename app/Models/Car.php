<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cases;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Car extends Model
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vin',
        'owner_name',
        'owner_phone',
        'number_plate',
        'release_year',
        'brand',
        'model',
        'body_type',
        'motor',
        'drive_type',
        'fuel_type',
        'sql_number',
        'user_id',
        'category_id',
        'status_id',
    ];

    public function marks() {
        return $this->hasManyThrough(Marks::class, Cases::class);
    }
    
}
