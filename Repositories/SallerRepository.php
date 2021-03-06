<?php

namespace Modules\Saller\Repositories;

use Modules\Saller\Entities\Saller;

class SallerRepository
{

	// LOAD
	public static function load()
	{
		return Saller::all();
	}

	public static function loadByUniqueKeys($id, $name, $email)
	{
		return Saller::where('id', $id)->orWhere('name', $name)->orWhere('email', $email)->first();
	}

	public static function list($search = '', $limit = 10){
		$saller =  Saller::where('name', 'like', '%'.$search.'%')->paginate($limit);
		$saller->appends(request()->query());
		return $saller;
	}


	public static function store($data){
		return Saller::create($data);
	}


	public static function update(Saller $saller, $data){
		if(array_key_exists('password', $data)){
			if(is_null($data['password'])){
				unset($data['password']);
			} 
		}
		$saller->update($data);
		return $saller;
	}


	public static function destroy(Saller $saller){
		$saller->delete();
	}


	public static function toSelect($value, $description){
		return Saller::pluck($description, $value);
	}

}
