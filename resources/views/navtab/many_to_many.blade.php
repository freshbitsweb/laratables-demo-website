<nav>
    <div class="nav nav-tabs" id="nav-tab-many-to-many" role="tablist">
        <a class="nav-item nav-link active"
            id="nav-image-tab-many-to-many"
            data-toggle="tab"
            href="#nav-image-many-to-many"
            role="tab"
            aria-controls="nav-image"
            aria-selected="false"
        >
            Screenshots
        </a>

        <a class="nav-item nav-link"
            id="nav-Controller-tab-many-to-many"
            data-toggle="tab"
            href="#nav-controller-many-to-many"
            role="tab"
            aria-controls="nav-controller"
            aria-selected="false"
        >
            Controller
        </a>

        <a class="nav-item nav-link"
            id="nav-view-tab-many-to-many"
            data-toggle="tab"
            href="#nav-view-many-to-many"
            role="tab"
            aria-controls="nav-view"
            aria-selected="false"
        >
            View
        </a>

        <a class="nav-item nav-link"
            id="nav-model-tab-many-to-many"
            data-toggle="tab"
            href="#nav-model-many-to-many"
            role="tab"
            aria-controls="nav-model"
            aria-selected="false"
        >
            Model
        </a>

        <a class="nav-item nav-link"
            id="nav-output-tab-many-to-many"
            data-toggle="tab"
            href="#nav-output-many-to-many"
            role="tab"
            aria-controls="nav-output"
            aria-selected="false"
        >
            Output
        </a>

    </div>
</nav>

<div class="tab-content" id="nav-tabContent-many-to-many">
    <div class="tab-pane fade show active"
        id="nav-image-many-to-many"
        role="tabpanel"
        aria-labelledby="nav-image-tab-many-to-many"
    >
        @include('navtab.screenshots.many_to_many.images')
    </div>

    <div class="tab-pane fade"
        id="nav-controller-many-to-many"
        role="tabpanel"
        aria-labelledby="nav-controller-tab-many-to-many"
    >
        @include('navtab.codes.many_to_many.controller')
    </div>

    <div class="tab-pane fade"
        id="nav-view-many-to-many"
        role="tabpanel"
        aria-labelledby="nav-view-tab-many-to-many"
    >
        @include('navtab.codes.many_to_many.view')
    </div>

    <div class="tab-pane fade"
        id="nav-model-many-to-many"
        role="tabpanel"
        aria-labelledby="nav-model-tab-many-to-many"
    >
        @include('navtab.codes.many_to_many.model')
    </div>

    <div class="tab-pane fade"
        id="nav-output-many-to-many"
        role="tabpanel"
        aria-labelledby="nav-output-tab-many-to-many"
    >
        <br>
        @include('navtab.output.many_to_many.laratable')

    </div>
</div>
