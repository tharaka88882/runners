<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = [
        'sex',
        'color',
        'age',
        'owner',
        '_1st_up',
        '_2nd_up',
        '_3rd_up',
        '_4th_up',
        'track',
        'distance',
        'trk_dist',
        'firm',
        'good',
        'sort',
        'heavy',
        'synthetic',
        'night'

    ];

    public function runner(){
        return $this->BelongsTo(Runner::class,'runner_id','id','runners');

    }



}
