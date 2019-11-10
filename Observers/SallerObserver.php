<?php

namespace Modules\Saller\Observers;

use Modules\Saller\Entities\Saller;
use Illuminate\Support\Facades\Hash;

class SallerObserver
{

	public function creating(Saller $saller)
	{
		$saller->password = Hash::make($saller->password);
	}	

	public function updating(Saller $saller)
	{
		if($saller->isDirty('password')){
			$saller->password = Hash::make($saller->password);
		}
	}	

}
