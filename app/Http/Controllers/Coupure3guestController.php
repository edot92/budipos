<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Coupure3;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Coupure3guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $coupure3 = Coupure3::paginate(15);

        return view('Coupure3guest.coupure3.index', compact('coupure3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('Coupure3guest.coupure3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Coupure3::create($request->all());

        Session::flash('flash_message', 'Coupure3 added!');

        return redirect('coupure3');
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
        $coupure3 = Coupure3::findOrFail($id);

        return view('Coupure3guest.coupure3.show', compact('coupure3'));
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
        $coupure3 = Coupure3::findOrFail($id);

        return view('Coupure3guest.coupure3.edit', compact('coupure3'));
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
        
        $coupure3 = Coupure3::findOrFail($id);
        $coupure3->update($request->all());

        Session::flash('flash_message', 'Coupure3 updated!');

        return redirect('coupure3');
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
        Coupure3::destroy($id);

        Session::flash('flash_message', 'Coupure3 deleted!');

        return redirect('coupure3');
    }
}
