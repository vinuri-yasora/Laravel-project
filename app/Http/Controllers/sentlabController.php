<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testrecords;

class sentlabController extends Controller
{
    //
    function show()
    {
        $data=testrecords::all();
        return view('layouts.sentlab',['testrecords'=>$data]);
    }
}
