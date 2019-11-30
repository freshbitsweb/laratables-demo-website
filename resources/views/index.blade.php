@extends('layouts.master')

@section('content')

<div class="container">

    <div class="card bg-light mb-3" style="max-width: auto;">
        <div class="card-header">
            <div class="dropdown" style="float:left">
                <button class="btn btn-primary dropdown-toggle"
                    type="button"
                    data-toggle="dropdown"
                >
                    LaraTable Examples
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#basic"
                    >
                        Basic
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#customize"
                    >
                        Customize Column
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#onetoone"
                    >
                        One-To-One
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#onetomany"
                    >
                        One-To-Many
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#manytomany"
                    >
                        Many-To-Many
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        href="#manytomanypoly"
                    >
                        One-To-Many Polymorphic
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body"></div>
    </div>
</div>

@endsection
