<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserWasCreated;

class User extends Authenticatable
{
    use  Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'type', 'gender', 'dob', 'experience', 'sebi_number', 'city', 'state', 'avatar', 'profile_updated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes shows the list of events.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => UserWasCreated::class
    ];

    /**
     * Make sure to auto lowercase email field
     *
     * @var array
     */
    public function setEmailAttribute($email)
    {
        $this->attributes['email'] = strtolower($email);
    }

    public function quiz()
    {
        return $this->hasMany(QuizParticipant::class, 'participant_id');
    }
}
