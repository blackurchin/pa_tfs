<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    public $table = 'country';

//    protected $dates = [
//        'created_at',
//        'updated_at',
//        'deleted_at',
//    ];
//
//    protected $fillable = [
//        'country_code',
//        'description',
//        'created_at',
//        'updated_at',
////        'deleted_at',
//    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
