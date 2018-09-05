<?php

namespace Brainy;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
			'name',
			'description',
			'company_id',
			'user_id',
			'days',
	];
    //
	public  function user(){
		return $this->belongsTo('Brainy\User');
	}

	public  function company(){
		return $this->belongsTo('Brainy\Company');
	}

	public  function comments(){
		return $this->morphMany('Brainy\Comment','commentable');
	}

}
