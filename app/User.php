<?php

namespace Brainy;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        		'name',
    			'email',
    			'password',
    			'first_name',
    			'middle_name',
    			'last_name',
    			'city',
    			'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function tasks(){
    	return $this->hasMany('Brainy\Task');
    }

  

    public  function role(){
    	return $this->belongsTo('Brainy\Role');
    }

    public  function companies(){
    	return $this->hasMany('Brainy\Company');
    }



    public  function projects(){
    	return $this->belongsToMany('Brainy\Project');
    }

    public  function comments(){
  		return $this->morphMany('Brainy\Comment','commentable');
  	}


}
