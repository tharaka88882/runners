<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'external_id',
        'name'
    ];

    public function races(){
        return $this->hasMany(Race::class);
    }
}
