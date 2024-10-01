<?php

namespace Influence360\Lead\Repositories;

use Illuminate\Container\Container;
use Illuminate\Support\Str;
use Influence360\Core\Eloquent\Repository;

class PipelineRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected StageRepository $stageRepository,
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Lead\Contracts\Pipeline';
    }

    /**
     * Create pipeline.
     *
     * @return \Influence360\Lead\Contracts\Pipeline
     */
    public function create(array $data)
    {
        if ($data['is_default'] ?? false) {
            $this->model->query()->update(['is_default' => 0]);
        }

        $pipeline = $this->model->create($data);

        foreach ($data['stages'] as $stageData) {
            $this->stageRepository->create(array_merge([
                'lead_pipeline_id' => $pipeline->id,
            ], $stageData));
        }

        return $pipeline;
    }

    /**
     * Update pipeline.
     *
     * @param  int  $id
     * @param  string  $attribute
     * @return \Influence360\Lead\Contracts\Pipeline
     */
    public function update(array $data, $id, $attribute = 'id')
    {
        $pipeline = $this->find($id);

        if ($data['is_default'] ?? false) {
            $this->model->query()->where('id', '<>', $id)->update(['is_default' => 0]);
        }

        $pipeline->update($data);

        $previousStageIds = $pipeline->stages()->pluck('id');

        foreach ($data['stages'] as $stageId => $stageData) {
            if (Str::contains($stageId, 'stage_')) {
                $this->stageRepository->create(array_merge([
                    'lead_pipeline_id' => $pipeline->id,
                ], $stageData));
            } else {
                if (is_numeric($index = $previousStageIds->search($stageId))) {
                    $previousStageIds->forget($index);
                }

                $this->stageRepository->update($stageData, $stageId);
            }
        }

        foreach ($previousStageIds as $stageId) {
            $pipeline->leads()->where('lead_pipeline_stage_id', $stageId)->update([
                'lead_pipeline_stage_id' => $pipeline->stages()->first()->id,
            ]);

            $this->stageRepository->delete($stageId);
        }

        return $pipeline;
    }

    /**
     * Return the default pipeline.
     *
     * @return \Influence360\Lead\Contracts\Pipeline
     */
    public function getDefaultPipeline()
    {
        $pipeline = $this->findOneByField('is_default', 1);

        if (! $pipeline) {
            $pipeline = $this->first();
        }

        return $pipeline;
    }
}
