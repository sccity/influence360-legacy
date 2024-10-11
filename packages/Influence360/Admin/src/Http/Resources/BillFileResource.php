<?php

namespace Influence360\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BillFileResource extends JsonResource
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
            'id'       => $this->id,
            'billid'   => $this->billid,
            'billname' => $this->billname,
            'year'     => $this->year,
            'session'  => $this->session,
            'status'   => $this->status,
            'sponsor'  => $this->sponsor,
        ];
    }
}
