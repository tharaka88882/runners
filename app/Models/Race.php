<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
        'external_id',
        'name'
    ];

    public function meeting(){
        return $this->BelongsTo(Meeting::class,'meeting_id','id','meetings');

    }

    public function runners(){
        return $this->hasMany(Runner::class);
    }

}
