<?php

namespace Modules\Saller\Services;

use Modules\Saller\Imports\SallersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportService {

	public function import($path)
	{
		Excel::import(new SallersImport, $path);
	}

}