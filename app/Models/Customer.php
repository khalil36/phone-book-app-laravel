<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //  use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
    ];
}
