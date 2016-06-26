<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Selisih_remi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Selisih_remisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $selisih_remis = Selisih_remi::paginate(15);

        return view('selisih_remis.selisih_remis.index', compact('selisih_remis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('selisih_remis.selisih_remis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_kantor' => 'required', 'uang_tunai' => 'required', 'uang_non_tunai' => 'required', 'jumlah_uang_non_tunai' => 'required', 'jumlah_uang_tunai' => 'required_with:title|alpha_num', ]);

        Selisih_remi::create($request->all());

        Session::flash('flash_message', 'Selisih_remi added!');

        return redirect('selisih_remis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $selisih_remi = Selisih_remi::findOrFail($id);

        return view('selisih_remis.selisih_remis.show', compact('selisih_remi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $selisih_remi = Selisih_remi::findOrFail($id);

        return view('selisih_remis.selisih_remis.edit', compact('selisih_remi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['nama_kantor' => 'required', 'uang_tunai' => 'required', 'uang_non_tunai' => 'required', 'jumlah_uang_non_tunai' => 'required', 'jumlah_uang_tunai' => 'required_with:title|alpha_num', ]);

        $selisih_remi = Selisih_remi::findOrFail($id);
        $selisih_remi->update($request->all());

        Session::flash('flash_message', 'Selisih_remi updated!');

        return redirect('selisih_remis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Selisih_remi::destroy($id);

        Session::flash('flash_message', 'Selisih_remi deleted!');

        return redirect('selisih_remis');
    }
}
