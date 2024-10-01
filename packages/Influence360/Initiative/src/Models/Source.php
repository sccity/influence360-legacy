<?php

namespace Influence360\Initiative\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Initiative\Contracts\Source as SourceContract;

class Source extends Model implements SourceContract
{
    protected $table = 'initiative_sources';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the initiatives.
     */
    public function initiatives()
    {
        return $this->hasMany(InitiativeProxy::modelClass());
    }
}
