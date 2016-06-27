<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use App\Remi;
use DB;
use Excel;
class MaatwebsiteDemoController extends Controller
{
    //
	
	public function importExport()
	{
		return view('importremis');
	}
	public function downloadExcel($type)
	{
		$data = Remi::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['id' => $value->id, 'denomasi' => $value->denomasi
					, 'jumlah' => $value->jumlah, 'total' => $value->total, 'keterangan' => $value->keterangan];
				}
				if(!empty($insert)){
					DB::table('Remis')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}
