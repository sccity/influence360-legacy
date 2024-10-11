<?php

namespace Influence360\BillFiles\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Activity\Models\ActivityProxy;
use Influence360\Attribute\Traits\CustomAttribute;
use Influence360\BillFiles\Contracts\BillFile as BillFileContract;

class BillFile extends Model implements BillFileContract
{
    use CustomAttribute;

    protected $fillable = [
        'billid',
        'billname',
        'year',
        'session',
        'status',
        'sponsor',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public const STATUS_PROGRESSED = 'Progressed';
    public const STATUS_IN_PROCESS = 'In Process';
    public const STATUS_ABANDONED = 'Abandoned';

    public static function getStatusOptions()
    {
        return [
            self::STATUS_PROGRESSED,
            self::STATUS_IN_PROCESS,
            self::STATUS_ABANDONED,
        ];
    }

    public function activities()
    {
        return $this->belongsToMany(ActivityProxy::modelClass(), 'bill_file_activities');
    }
}