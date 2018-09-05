<?php

namespace Brainy;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
	protected $fillable = [
			'name',
			'description',
			'user_id',

	];

	public  function user(){
		return $this->belongsTo('Brainy\User');
	}

	public  function projects(){
		return $this->hasMany('Brainy\Project');
	}

	public  function comments(){
		return $this->morphMany('Brainy\Comment','commentable');
	}



}
