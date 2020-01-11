<?php

namespace Modules\Saller\Services;

use Modules\Saller\Imports\SallersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class ImportService {

	public function import($path)
	{
		if(Storage::exists($path)){
			Excel::import(new SallersImport, $path);
		}
	}

}