<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Remi;
class RemisguestController extends Controller
{
    //
     public function index()
    {
        $remis = Remi::paginate(15);

        return view('guest.remis.index', compact('remis'));
    }
}
