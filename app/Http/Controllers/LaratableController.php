<?php

namespace App\Http\Controllers;

use App\Laratables\CustomUser;
use App\Laratables\ManyToManyUser;
use App\Laratables\OneToManyUser;
use App\Post;
use App\User;
use Freshbitsweb\Laratables\Laratables;

class LaratableController extends Controller
{
    /**
     * Show the datatables examples.
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
     * @return type Json
     **/
    public function basicLaratableData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * return data of the custom datatables.
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
     * @return Jason
     **/
    public function oneToOneData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * return data of the One To Many Relationship datatables.
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
     * @return Jason
     **/
    public function manyToManyData()
    {
        return Laratables::recordsOf(User::class, ManyToManyUser::class);
    }

    /**
     * return data of the One To Many Polymorphic Relationship datatables.
     *
     * @return Jason
     **/
    public function oneToManyPolyData()
    {
        return Laratables::recordsOf(Post::class);
    }
}
