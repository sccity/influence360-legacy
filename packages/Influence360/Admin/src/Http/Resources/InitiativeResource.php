<?php

namespace Influence360\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InitiativeResource extends JsonResource
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
            'title'                => $this->title,
            'initiative_value'           => $this->initiative_value,
            'formatted_initiative_value' => core()->formatBasePrice($this->initiative_value),
            'status'               => $this->status,
            'expected_close_date'  => $this->expected_close_date,
            'rotten_days'          => $this->rotten_days,
            'closed_at'            => $this->closed_at,
            'created_at'           => $this->created_at,
            'updated_at'           => $this->updated_at,
            'person'               => new PersonResource($this->person),
            'user'                 => new UserResource($this->user),
            'type'                 => new TypeResource($this->type),
            'source'               => new SourceResource($this->source),
            'pipeline'             => new PipelineResource($this->pipeline),
            'stage'                => new StageResource($this->stage),
            'tags'                 => TagResource::collection($this->tags),
        ];
    }
}
