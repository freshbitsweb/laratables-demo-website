<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\CustomUser;
use App\Laratables\OneToManyUser;
use App\Laratables\ManyToManyUser;

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

    /**
     * return data of the custom datatables.
     *
     *
     * @param Type $var Description
     * @return Json
     **/
    public function customLaratableData()
    {
        return Laratables::recordsOf(User::class, CustomUser::class);
    }

    /**
     * return data of the One To One Relationship datatables.
     *
     *
     * @return Jason
     **/
    public function oneToOneData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * return data of the One To Many Relationship datatables.
     *
     *
     * @return Jason
    **/
    public function oneToManyData()
    {
        return Laratables::recordsOf(User::class, OneToManyUser::class);
    }

    /**
     * return data of the Many To Many Relationship datatables.
     *
     *
     * @return Jason
     **/
    public function manyToManyData()
    {
        return Laratables::recordsOf(User::class, ManyToManyUser::class);
    }
}
