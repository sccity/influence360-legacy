<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillFile extends Model
{
    use HasFactory;

    // You can specify the table name if it doesn't follow Laravel's naming convention
    // protected $table = 'bill_files';

    // Specify the fillable attributes
    protected $fillable = [
        'billid',
        'year',
        'session',
        'billname',
        'sponsor',
        'status',
    ];
}
