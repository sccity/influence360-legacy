<?php

namespace Influence360\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Core\Contracts\Country as CountryContract;

class Country extends Model implements CountryContract
{
    public $timestamps = false;
}
