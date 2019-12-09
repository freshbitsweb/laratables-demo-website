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
     * Display the Home Page.
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        return view('index');
    }

    /**
     * Returns data of the basic datatables.
     *
     * @R Illuminate\Http\JsonResponse
     **/
    public function basicLaratableData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * Returns data of the custom datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function customLaratableData()
    {
        return Laratables::recordsOf(User::class, CustomUser::class);
    }

    /**
     * Returns data of the One To One Relationship datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function oneToOneData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * Returns data of the One To Many Relationship datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function oneToManyData()
    {
        return Laratables::recordsOf(User::class, OneToManyUser::class);
    }

    /**
     * Returns data of the Many To Many Relationship datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function manyToManyData()
    {
        return Laratables::recordsOf(User::class, ManyToManyUser::class);
    }

    /**
     * Returns data of the One To Many Polymorphic Relationship datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function oneToManyPolyData()
    {
        return Laratables::recordsOf(Post::class);
    }
}
