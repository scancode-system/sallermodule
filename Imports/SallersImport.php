<?php

namespace Modules\Saller\Imports;

use Exception;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Events\BeforeImport;
use Illuminate\Support\Facades\Storage;

use Modules\Saller\Repositories\SallerRepository;
use Modules\ImportWidget\Services\SessionService;

class SallersImport implements OnEachRow, WithHeadingRow, WithEvents
{

	use Importable, RegistersEventListeners;
 
	private $total_rows;

	public function onRow(Row $row)
	{
		try 
		{
			$data = $this->parse($row->toArray());

			$saller = SallerRepository::loadByUniqueKeys($data['id'], $data['name'], $data['email']);
			if($saller){
				$saller = SallerRepository::update($saller, $data);
				SessionService::updated('Saller', 'import', true, 'Representante '.$saller->id.' atualizado: '. json_encode($saller->toJson())."\r\n");
			} else {
				$saller = SallerRepository::store($data);
				SessionService::new('Saller', 'import', true);
			}
		} catch(Exception $e) {
			SessionService::failures('Saller', 'import', true, $e."\r\n"); 
		}
		SessionService::completed('Saller', 'import', ($row->getRowIndex()/$this->total_rows)*100);
	}

	private function parse($data)
	{
		return $data;	
	}


		public static function beforeImport(BeforeImport $event)
	{
		$cells = $event->getDelegate()->getActiveSheet()->toArray();
		$import = $event->getConcernable();
		$import->data($cells);
	}

	public function data($cells)
	{
		$this->total_rows = count($cells);
	}

}
