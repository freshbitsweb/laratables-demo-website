<nav>
    <div class="nav nav-tabs" id="nav-tab-one-to-many-poly" role="tablist">
        <a class="nav-item nav-link active"
            id="nav-image-tab-one-to-many-poly"
            data-toggle="tab"
            href="#nav-image-one-to-many-poly"
            role="tab"
            aria-controls="nav-image"
            aria-selected="false"
        >
            Screenshots
        </a>

        <a class="nav-item nav-link"
            id="nav-controller-tab-one-to-many-poly"
            data-toggle="tab"
            href="#nav-controller-one-to-many-poly"
            role="tab"
            aria-controls="nav-controller"
            aria-selected="false"
        >
            Controller
        </a>

        <a class="nav-item nav-link"
            id="nav-view-tab-one-to-many-poly"
            data-toggle="tab"
            href="#nav-view-one-to-many-poly"
            role="tab"
            aria-controls="nav-view"
            aria-selected="false"
        >
            View
        </a>

        <a class="nav-item nav-link"
            id="nav-model-tab-one-to-many-poly"
            data-toggle="tab"
            href="#nav-model-one-to-many-poly"
            role="tab"
            aria-controls="nav-model"
            aria-selected="false"
        >
            Model
        </a>

        <a class="nav-item nav-link"
            id="nav-output-tab-one-to-many-poly"
            data-toggle="tab"
            href="#nav-output-one-to-many-poly"
            role="tab"
            aria-controls="nav-output"
            aria-selected="false"
        >
            Output
        </a>

    </div>
</nav>

<div class="tab-content" id="nav-tabContent-one-to-many-poly">
    <div class="tab-pane fade show active"
        id="nav-image-one-to-many-poly"
        role="tabpanel"
        aria-labelledby="nav-image-tab-one-to-many-poly"
    >
        @include('navtab.screenshots.one_to_many_poly.images')
    </div>

    <div class="tab-pane fade"
        id="nav-controller-one-to-many-poly"
        role="tabpanel"
        aria-labelledby="nav-controller-tab-one-to-many-poly"
    >
        @include('navtab.codes.one_to_many_poly.controller')
    </div>

    <div class="tab-pane fade"
        id="nav-view-one-to-many-poly"
        role="tabpanel"
        aria-labelledby="nav-view-tab-one-to-many-poly"
    >
        @include('navtab.codes.one_to_many_poly.view')
    </div>

    <div class="tab-pane fade"
        id="nav-model-one-to-many-poly"
        role="tabpanel"
        aria-labelledby="nav-model-tab-one-to-many-poly"
    >
        @include('navtab.codes.one_to_many_poly.model')
    </div>

    <div class="tab-pane fade"
        id="nav-output-one-to-many-poly"
        role="tabpanel"
        aria-labelledby="nav-output-tab-one-to-many-poly"
    >
        <br>
        @include('navtab.output.one_to_many_poly.laratable')

    </div>
</div>
