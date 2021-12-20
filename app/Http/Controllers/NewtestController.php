<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testrecords;

class NewtestController extends Controller
{
    //
    function show()
    {
        $data=testrecords::all();
        return view('layouts.newtest',['testrecords'=>$data]);
    }
}
