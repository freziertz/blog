<?php

namespace Brainy;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
	protected $fillable = [
			'name',
			'hours',
			'days',
			'project_id',
			'user_id',
			'company_id',

	];

	public  function user(){
		return $this->belongsTo('Brainy\User');
	}
	public  function project(){
		return $this->belongsTo('Brainy\Project');
	}
	public  function company(){
		return $this->belongsTo('Brainy\Company');
	}

	public  function users(){
		return $this->belongsToMany('Brainy\User');
	}

	public  function comments(){
		return $this->morphMany('Brainy\Comment','commentable');
	}


}
