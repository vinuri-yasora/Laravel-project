<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testrecords;

class samplecollectedController extends Controller
{
    //
    function show()
    {
        $data=testrecords::all();
        return view('layouts.samplecollected',['testrecords'=>$data]);
    }
}
