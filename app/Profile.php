<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;


class Profile extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'profiles';
//    protected $dates = [
//        'updated_at',
//        'created_at',
//        'email_verified_at',
//    ];
    protected $appends = [
        'photos','passport_photo',
    ];
    protected $fillable = [
        'user_id',
        'event','designation',
        'rank','rankcode',
        'firstname','middlename','lastname',
        'gender',
        'birthdate',
        'assignment_duty_position','dietary_restriction',
        'profile_photo','passport_photo',
        'language_1', 'language_2', 'language_3',
        'required_interpretation','interpreter_language',
        'stayshangrila',
        'flight_number_arrive','arrival_date','arrival_time', 'arrival_airport',
        'flight_number_depart', 'departure_date', 'departure_time','departure_airport',
        'passport_nr','nationality',
        'is_active',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }


    public function getFullNameAttribute()
    {
        //return "{$this->rankcode} {$this->firstname} {$this->middlename} {$this->lastname}";
        return $this->rankcode.' '. ucfirst($this->firstname) . '  ' . ucfirst($this->lastname);
    }
    public function passport()
    {
        return $this->belongsTo('App\Passport','profile_id');
    }

}
