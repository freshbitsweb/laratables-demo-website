<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaratableController extends Controller
{
    /**
     * Show the datatables examples.
     *
     *
     * @return \Illuminate\Http\Response
    **/
    public function index()
    {
        return view('index');
    }
}
