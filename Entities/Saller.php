<?php

namespace Modules\Saller\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Rocky\Eloquent\HasDynamicRelation;

class Saller extends Authenticatable
{

	use Notifiable, HasDynamicRelation;

	protected $dateFormat = 'Y-m-d H:i:s';


	protected $fillable = [
		'id', 'name', 'email', 'password', 'goal'
	];

	protected $hidden = [
		'password', 'remember_token',
	];



}
