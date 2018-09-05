<?php

namespace Brainy;

use Brainy\Comment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
	protected $fillable = [
			'body',
			'url',
			'commentable_id', //project, task or comapny
			'commentable_type',
			'user_id',

	];

	public function commentable()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->hasOne('Brainy\User','id','user_id');
	}
}
