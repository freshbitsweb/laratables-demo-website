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
                    Select Example
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="basic-text"
                        href="#basic"
                    >
                        Basic
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="customize-text"
                        href="#customize"
                    >
                        Customize Column
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="one-to-one-text"
                        href="#one-to-one"
                    >
                        One-To-One
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="one-to-many-text"
                        href="#one-to-many"
                    >
                        One-To-Many
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="many-to-many-text"
                        href="#many-to-many"
                    >
                        Many-To-Many
                    </a>
                    <a class="dropdown-item"
                        data-toggle="tab"
                        data-example-text-element="one-to-many-poly-text"
                        href="#one-to-many-poly"
                    >
                        One-To-Many Polymorphic
                    </a>
                </div>
            </div>

            <div style="float:right" id="example-name-display">

                <a href="https://github.com/freshbitsweb/laratables-demo-basic" target="_blank">
                    <h3 id="basic-text">
                        Basic
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>


                <a href="https://github.com/freshbitsweb/laratables-demo-customize-column"
                    target="_blank"
                >
                    <h3 id="customize-text" class="d-none">
                        Customize Column
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>

                <a href="https://github.com/freshbitsweb/laratables-demo-one-to-one" target="_blank">
                    <h3 id="one-to-one-text" class="d-none">
                        One to One
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>

                <a href="https://github.com/freshbitsweb/laratables-demo-one-to-many" target="_blank">
                    <h3 id="one-to-many-text" class="d-none">
                        One To Many
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>

                <a href="https://github.com/freshbitsweb/laratables-demo-many-to-many" target="_blank">
                    <h3 id="many-to-many-text" class="d-none">
                        Many To Many
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>

                <a href="https://github.com/freshbitsweb/laratables-demo-one-to-many-polymorphic"
                    target="_blank"
                >
                    <h3 id="one-to-many-poly-text" class="d-none">
                        One To Many Polymorphic
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </h3>
                </a>
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
</div>

@endsection
