<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
        'name', 'email' ,'uren','totaaluren','resterendeuren','week','maandag','dinsdag','woensdag','donderdag','vrijdag',
    ];
}
