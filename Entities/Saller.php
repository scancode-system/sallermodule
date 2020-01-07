<?php

namespace Modules\Saller\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Saller extends Authenticatable
{

	use Notifiable;

	protected $dateFormat = 'Y-m-d H:i:s';


	protected $fillable = [
		'name', 'email', 'password', 'goal'
	];

	protected $hidden = [
		'password', 'remember_token',
	];



}
