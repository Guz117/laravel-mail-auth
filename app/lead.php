<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    protected $fillable =
    [
        'name',
        'email',
        'message'
    ];
}
