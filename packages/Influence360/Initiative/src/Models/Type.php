<?php

namespace Influence360\Initiative\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Initiative\Contracts\Type as TypeContract;

class Type extends Model implements TypeContract
{
    protected $table = 'initiative_types';

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
