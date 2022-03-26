<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    protected $fillable = [
        'external_id',
        'name'
    ];

    public function race(){
        return $this->BelongsTo(race::class,'race_id','id','races');

    }

    public function form_data(){
        return $this->hasMany(FormData::class);
    }
    public function last_runs(){
        return $this->hasMany(FormLastRun::class);
    }
}
