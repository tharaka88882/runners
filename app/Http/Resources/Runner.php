<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Runner extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'runner_name' => $this->name,
            'age' => $this->form_data->age,
            'sex' => $this->form_data->sex,
            'color' => $this->form_data->color,
            'last_runs'=>$this->last_runs,

        
        ];
    }
}
