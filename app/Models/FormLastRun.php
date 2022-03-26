<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormLastRun extends Model
{

    protected $fillable = [
        'dt_tot',
        'num',
        'name',
        'date',
        'price'
    ];

    public function runner(){
        return $this->BelongsTo(Runner::class,'runner_id','id','runners');

    }
}
