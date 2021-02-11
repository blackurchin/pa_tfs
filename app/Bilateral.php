<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilateral extends Model
{
    public $table = 'bilaterals';
    protected $dates = [
        'updated_at',
        'created_at',
    ];
    protected $fillable = [
        'requesting_country',
        'requested_country',
        'declination',
        'reason_requesting',
        'reason_requested',
        'status',
        'room',
        'schedule',
        'time',
        'created_at',
        'updated_at',
        'remember_token',
    ];
}