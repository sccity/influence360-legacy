<?php

namespace Influence360\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'code'                 => $this->code,
            'name'                 => $this->name,
            'initiative_value'           => $this->initiative_value,
            'formatted_initiative_value' => core()->formatBasePrice($this->initiative_value),
            'is_user_defined'      => $this->is_user_defined,
            'created_at'           => $this->created_at,
            'updated_at'           => $this->updated_at,
        ];
    }
}
