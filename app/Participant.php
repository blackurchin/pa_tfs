<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public $table = 'participants';
    protected $dates = [
        'updated_at',
        'created_at',
        'email_verified_at',
    ];
    protected $fillable = [
        'name',
        'email',
        'country',
        'created_at',
        'updated_at',
        'remember_token',
        'email_verified_at',
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser','user_id');
    }
}
