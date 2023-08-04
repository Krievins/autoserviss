<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $fillable = [
        'mark_x',
        'mark_y',
        'mark_desc',
        'case_id'
    ];

    public function caseRelation() {
        return $this->belongsTo(Cases::class, 'case_id');
    }

}
