<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testrecords;

class assignedtestController extends Controller
{
    //
    function show()
    {
        $data=testrecords::all();
        return view('layouts.assignedtest',['testrecords'=>$data]);
        
    }
}
