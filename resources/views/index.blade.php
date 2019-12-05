@extends('layouts.master')

@section('content')

<div class="container">

    <div class="card bg-light mb-3" style="max-width: auto;">
        <div class="card-header">
            <div class="dropdown" style="float:left">
                <button class="btn btn-primary dropdown-toggle"
                    id="btn-align"
                    type="button"
                    data-toggle="dropdown"
                >
                    LaraTable Examples
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item"
                        id="basic-dropdown-select"
                        data-toggle="tab"
                        href="#basic"
                    >
                        Basic
                    </a>
                    <a class="dropdown-item"
                        id="custom-dropdown-select"
                        data-toggle="tab"
                        href="#customize"
                    >
                        Customize Column
                    </a>
                    <a class="dropdown-item"
                        id="one-to-one-dropdown-select"
                        data-toggle="tab"
                        href="#one-to-one"
                    >
                        One-To-One
                    </a>
                    <a class="dropdown-item"
                        id="one-to-many-dropdown-select"
                        data-toggle="tab"
                        href="#one-to-many"
                    >
                        One-To-Many
                    </a>
                    <a class="dropdown-item"
                        id="many-to-many-dropdown-select"
                        data-toggle="tab"
                        href="#many-to-many"
                    >
                        Many-To-Many
                    </a>
                    <a class="dropdown-item"
                        id="one-to-many-poly-dropdown-select"
                        data-toggle="tab"
                        href="#one-to-many-poly"
                    >
                        One-To-Many Polymorphic
                    </a>
                </div>
            </div>
            <div style="float:right" id="example-name-display">
                <h1 id="basic-text">Basic</h1>
                <h1 id="customize-text" class="d-none">Customize Column</h1>
                <h1 id="one-to-one-text" class="d-none">One to One</h1>
                <h1 id="one-to-many-text" class="d-none">One To Many</h1>
                <h1 id="many-to-many-text" class="d-none">Many To Many</h1>
                <h1 id="one-to-many-poly-text" class="d-none">One To Many Polymorphic</h1>
            </div>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane show active" id="basic">

                        @include('navtab.basic')

                    </div>

                    <div class="tab-pane" id="customize">

                        @include('navtab.customize')

                    </div>

                    <div class="tab-pane" id="one-to-one">

                        @include('navtab.one_to_one')

                    </div>

                    <div class="tab-pane" id="one-to-many">

                        @include('navtab.one_to_many')

                    </div>

                    <div class="tab-pane" id="many-to-many">

                        @include('navtab.many_to_many')

                    </div>

                    <div class="tab-pane" id="one-to-many-poly">

                        @include('navtab.one_to_many_poly')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
