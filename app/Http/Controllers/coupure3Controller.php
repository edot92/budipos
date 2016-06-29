<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\coupure3;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class coupure3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $coupure3 = coupure3::paginate(15);

        return view('coupure3.coupure3.index', compact('coupure3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('coupure3.coupure3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_kantor' => 'required', 'keping' => 'required', 'besar_uang' => 'required', ]);

        coupure3::create($request->all());

        Session::flash('flash_message', 'coupure3 added!');

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
        $coupure3 = coupure3::findOrFail($id);

        return view('coupure3.coupure3.show', compact('coupure3'));
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
        $coupure3 = coupure3::findOrFail($id);

        return view('coupure3.coupure3.edit', compact('coupure3'));
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
        $this->validate($request, ['nama_kantor' => 'required', 'keping' => 'required', 'besar_uang' => 'required', ]);

        $coupure3 = coupure3::findOrFail($id);
        $coupure3->update($request->all());

        Session::flash('flash_message', 'coupure3 updated!');

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
        coupure3::destroy($id);

        Session::flash('flash_message', 'coupure3 deleted!');

        return redirect('coupure3');
    }
}
