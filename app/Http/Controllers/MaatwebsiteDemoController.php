<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Remi;
use DB;
use Excel;
class MaatwebsiteDemoController extends Controller
{
    //
       public function __construct()
    {
        $this->middleware('auth');
    }
	
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
	public function importExcel(Request $request)
    {
		if($request->hasFile('import_file')){
	
    		
			$path = $request->file('import_file');
		
	   
			$data = Excel::load($path, function($reader) {
			})->get();
	
			if(!empty($data) && $data->count()){
			
				foreach ($data as $key => $value) {
					$insert[] = ['id' => $value->id, 'nama_kantor' => $value->namakantor
					, 'uang_tunai' => $value->uang_tunai, 'uang_non_tunai' => $value->uang_non_tunai, 'jumlah_uang_tunai' => $value->jumlah_uang_tunai, 'jumlah_uang_non_tunai' => $value->jumlah_uang_non_tunai];
				}
				if(!empty($insert)){
					DB::table('Selisih_remis')->insert($insert);
					return redirect()->route('selisih_remis.index');
					//dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
	
}
