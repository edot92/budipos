<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\selisih_remi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Selisih_remisguestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $selisih_remisguest = selisih_remi::paginate(15);

        return view('selisih_remisguest.index', compact('selisih_remisguest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('selisih_remisguest.selisih_remisguest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        selisih_remis::create($request->all());

        Session::flash('flash_message', 'selisih_remisguest added!');

        return redirect('selisih_remisguest');
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
        $selisih_remisguest = selisih_remis::findOrFail($id);

        return view('selisih_remisguest.selisih_remisguest.show', compact('selisih_remisguest'));
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
        $selisih_remisguest = selisih_remis::findOrFail($id);

        return view('selisih_remisguest.selisih_remisguest.edit', compact('selisih_remisguest'));
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
        
        $selisih_remisguest = selisih_remisguest::findOrFail($id);
        $selisih_remisguest->update($request->all());

        Session::flash('flash_message', 'selisih_remisguest updated!');

        return redirect('selisih_remisguest');
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
        selisih_remisguest::destroy($id);

        Session::flash('flash_message', 'selisih_remisguest deleted!');

        return redirect('selisih_remisguest');
    }
}
