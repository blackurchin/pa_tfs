<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    public $table = 'attachments';

    protected $fillable = [
        'profile_id',
        'filename','file_type','file',
        'mime','size',
        'created_at',
        'updated_at',
    ];


    public function profile()
    {
        return $this->belongsTo('App\Profile','profile_id');
    }

}
