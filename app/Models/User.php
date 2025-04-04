<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use SalimHosen\Core\Models\Company;
use SalimHosen\Core\Models\Notification;
use SalimHosen\Core\Models\Role;
use SalimHosen\Core\Notifications\ResetPassword;
use SalimHosen\Core\Notifications\VerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'user_type',
        'email',
        'phone',
        'password',
        'address',
        'state_id',
        'county_id',
        'zip_code',
        'business_description',
        'company_mission',
        'company_vision',
        'products',
        'services',
        'trade_id',
        'profession_title',
        'years_of_experience',
        'education',
        'institution',
        'work_history',
        'license',
        'certificates',
        'achivements',
        'ability_skills',
        'achievements',
        'about_you'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? \Hash::make($input) : $input;
        }
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role){

        return $this->roles()->where('title', $role)->first() ? true : false;

    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function companies(){
        return $this->belongsToMany(Company::class);
    }

    public function notifications(){
        return $this->belongsToMany(Notification::class);
    }


    public function following(){
        return $this->hasOne(Follower::class, 'follower_id');
    }


    public function followers(){
        return $this->hasMany(Follower::class, 'user_id');
    }

    public function followings(){
        return $this->hasMany(Follower::class, 'follower_id');
    }

    public function user(){
        return $this->belongsToMany(User::class, 'user_user', 'user_id', 'friend_id');
    }

    public function trade(){
        return $this->belongsTo(Trade::class, 'trade_id');
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function county(){
        return $this->belongsTo(County::class);
    }

    public function counties()
    {
        return $this->belongsToMany(County::class);
    }

    public function sendermessages(){
        return $this->hasMany(ChatMessage::class, 'sender_id');
    }
}
