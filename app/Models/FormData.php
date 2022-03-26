<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = [
        'career',
        '1st_up',
        '2nd_up',
        '3rd_up',
        '4th_up',
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
    public function runner(){
        return $this->BelongsTo(Runner::class,'runner_id','id','runners');

    }


}
