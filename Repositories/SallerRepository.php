<?php

namespace Modules\Saller\Repositories;

use Modules\Saller\Entities\Saller;

class SallerRepository
{


	public static function list($search = '', $limit = 10){
		$saller =  Saller::where('name', 'like', '%'.$search.'%')->paginate($limit);
		$saller->appends(request()->query());
		return $saller;
	}


	public static function store($data){
		Saller::create($data);
	}


	public static function update(Saller $saller, $data){
		if(array_key_exists('password', $data)){
			if(is_null($data['password'])){
				unset($data['password']);
			} 
		}
		$saller->update($data);
	}


	public static function destroy(Saller $saller){
		$saller->delete();
	}
 

 	public static function toSelect($value, $description){
		return Saller::pluck($description, $value);
	}

}
