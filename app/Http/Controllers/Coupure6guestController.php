<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Coupure6;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Coupure6guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $coupure6 = Coupure6::paginate(15);

        return view('Coupure6guest.coupure6.index', compact('coupure6'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('Coupure6guest.coupure6.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Coupure6::create($request->all());

        Session::flash('flash_message', 'Coupure6 added!');

        return redirect('coupure6');
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
        $coupure6 = Coupure6::findOrFail($id);

        return view('Coupure6guest.coupure6.show', compact('coupure6'));
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
        $coupure6 = Coupure6::findOrFail($id);

        return view('Coupure6guest.coupure6.edit', compact('coupure6'));
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
        
        $coupure6 = Coupure6::findOrFail($id);
        $coupure6->update($request->all());

        Session::flash('flash_message', 'Coupure6 updated!');

        return redirect('coupure6');
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
        Coupure6::destroy($id);

        Session::flash('flash_message', 'Coupure6 deleted!');

        return redirect('coupure6');
    }
}
