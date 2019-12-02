<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

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

    /**
     * return data of the basic datatables.
     *
     *
     * @return type Json
    **/
    public function basicLaratableData()
    {
        return Laratables::recordsOf(User::class);
    }
}
