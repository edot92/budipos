<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Remi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RemisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $remis = Remi::paginate(15);

        return view('remis.index', compact('remis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('remis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Remi::create($request->all());

        Session::flash('flash_message', 'Remi added!');

        return redirect('remis');
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
        $remi = Remi::findOrFail($id);

        return view('remis.show', compact('remi'));
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
        $remi = Remi::findOrFail($id);

        return view('remis.edit', compact('remi'));
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
        
        $remi = Remi::findOrFail($id);
        $remi->update($request->all());

        Session::flash('flash_message', 'Remi updated!');

        return redirect('remis');
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
        Remi::destroy($id);

        Session::flash('flash_message', 'Remi deleted!');

        return redirect('remis');
    }
}
