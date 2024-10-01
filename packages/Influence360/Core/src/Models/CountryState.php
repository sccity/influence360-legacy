<?php

namespace Influence360\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Core\Contracts\CountryState as CountryStateContract;

class CountryState extends Model implements CountryStateContract
{
    public $timestamps = false;
}
