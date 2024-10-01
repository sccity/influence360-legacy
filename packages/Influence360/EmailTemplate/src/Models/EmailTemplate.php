<?php

namespace Influence360\EmailTemplate\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\EmailTemplate\Contracts\EmailTemplate as EmailTemplateContract;

class EmailTemplate extends Model implements EmailTemplateContract
{
    protected $fillable = [
        'name',
        'subject',
        'content',
    ];
}
