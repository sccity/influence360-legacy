<?php

namespace Influence360\Activity\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Activity\Contracts\Activity as ActivityContract;
use Influence360\Contact\Models\PersonProxy;
use Influence360\Initiative\Models\InitiativeProxy;
use Influence360\User\Models\UserProxy;
use Influence360\Warehouse\Models\WarehouseProxy;
use Influence360\BillFiles\Models\BillFileProxy;

class Activity extends Model implements ActivityContract
{
    /**
     * Define table name of property
     *
     * @var string
     */
    protected $table = 'activities';

    /**
     * Define relationships that should be touched on save
     *
     * @var array
     */
    protected $with = ['user'];

    /**
     * Cast attributes to date time
     *
     * @var array
     */
    protected $casts = [
        'schedule_from' => 'datetime',
        'schedule_to'   => 'datetime',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'title', 'comment', 'schedule_from', 'schedule_to',
        'parent_type', 'parent_id', 'user_id', 'is_done'
    ];

    /**
     * Get the user that owns the activity.
     */
    public function user()
    {
        return $this->belongsTo(UserProxy::modelClass());
    }

    /**
     * The participants that belong to the activity.
     */
    public function participants()
    {
        return $this->hasMany(ParticipantProxy::modelClass());
    }

    /**
     * Get the file associated with the activity.
     */
    public function files()
    {
        return $this->hasMany(FileProxy::modelClass(), 'activity_id');
    }

    /**
     * The initiatives that belong to the activity.
     */
    public function initiatives()
    {
        return $this->belongsToMany(InitiativeProxy::modelClass(), 'initiative_activities');
    }

    /**
     * The Person that belong to the activity.
     */
    public function persons()
    {
        return $this->belongsToMany(PersonProxy::modelClass(), 'person_activities');
    }

    /**
     * The Warehouse that belong to the activity.
     */
    public function warehouses()
    {
        return $this->belongsToMany(WarehouseProxy::modelClass(), 'warehouse_activities');
    }

    /**
     * Get the parent of the activity.
     */
    public function parent()
    {
        return $this->morphTo();
    }

    /**
     * The bill files that belong to the activity.
     */
    public function billFile()
    {
        return $this->belongsToMany(BillFileProxy::modelClass(), 'billfile_activities');

    }
}
