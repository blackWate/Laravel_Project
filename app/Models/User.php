<?php

namespace GBA\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GBA\Notifications\UserResetPasswordNotification;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'location',
        'ip',
        'role',
        'verifyToken',
        'country',
        'city',
        'state',
        'state_name',
        'postal_code',
        'currency'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','role',
    ];

    public function getName(){
        if($this->first_name && $this->last_name ){
            return "{$this->first_name} {$this->last_name}";
        }

        if($this->first_name ){
            return $this->first_name;
        }

        return null;
    }

    public function getNameFE($email){
        return $this->where('email', $email)->first()->username;
    }

    public function getNameOrUsername(){
        return $this->getname() ?: $this->username;
    }

    public function getFirstNameOrUsername(){
        return $this->first_name ?: $this->username;
    }

    public function isAdmin(){
        if($this->role=='admin')
            return true;
        return false;
    }




    public function sendPasswordResetNotification($token)
    {

        $user=$this->getNameFE($this->getEmailForPasswordReset());

        $this->notify(new UserResetPasswordNotification($token,$user));
    }

}
