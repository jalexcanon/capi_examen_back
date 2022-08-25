<?php

namespace App\Http\Resources;
use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   
        $this->today=date("Y-m-d");
        $this->age=date_diff(date_create($this->fecha_nacimiento), date_create($this->today));
        
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'age' => $this->age->format('%y'),
            'email' => $this->email,
            'domicilio'=> $this->domicilio,
        ];
    }
}
