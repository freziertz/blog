<?php

namespace Brainy;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
	protected $fillable = [
			
			'user_id',
			'task_id',
			
	];
}
