<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testrecords;

class onthewaytestController extends Controller
{
    //
    function show()
    {
        $data=testrecords::all();
        return view('layouts.onthewaytest',['testrecords'=>$data]);
    }
}
