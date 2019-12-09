<nav>
    <div class="nav nav-tabs" id="nav-tab-customize" role="tablist">
        <a class="nav-item nav-link active"
            id="nav-image-tab-customize"
            data-toggle="tab"
            href="#nav-image-customize"
            role="tab"
            aria-controls="nav-image"
            aria-selected="false"
        >
            Screenshots
        </a>

        <a class="nav-item nav-link"
            id="nav-controller-tab-customize"
            data-toggle="tab"
            href="#nav-controller-customize"
            role="tab"
            aria-controls="nav-controller"
            aria-selected="false"
        >
            Controller
        </a>

        <a class="nav-item nav-link"
            id="nav-view-tab-customize"
            data-toggle="tab"
            href="#nav-view-customize"
            role="tab"
            aria-controls="nav-view"
            aria-selected="false"
        >
            View
        </a>

        <a class="nav-item nav-link"
            id="nav-model-tab-customize"
            data-toggle="tab"
            href="#nav-model-customize"
            role="tab"
            aria-controls="nav-model"
            aria-selected="false"
        >
            Model
        </a>

        <a class="nav-item nav-link"
            id="nav-config-tab-customize"
            data-toggle="tab"
            href="#nav-config-customize"
            role="tab"
            aria-controls="nav-config"
            aria-selected="false"
        >
            Config
        </a>

        <a class="nav-item nav-link"
            id="nav-output-tab-customize"
            data-toggle="tab"
            href="#nav-output-customize"
            role="tab"
            aria-controls="nav-output"
            aria-selected="false"
        >
            Output
        </a>

    </div>
</nav>

<div class="tab-content" id="nav-tabContent-customize">
    <div class="tab-pane fade show active"
        id="nav-image-customize"
        role="tabpanel"
        aria-labelledby="nav-image-tab-customize"
    >
        @include('navtab.screenshots.customize.images')
    </div>

    <div class="tab-pane fade"
        id="nav-controller-customize"
        role="tabpanel"
        aria-labelledby="nav-controller-tab-customize"
    >
        @include('navtab.codes.customize.controller')
    </div>

    <div class="tab-pane fade"
        id="nav-view-customize"
        role="tabpanel"
        aria-labelledby="nav-view-tab-customize"
    >
        @include('navtab.codes.customize.view')
    </div>

    <div class="tab-pane fade"
        id="nav-model-customize"
        role="tabpanel"
        aria-labelledby="nav-model-tab-customize"
    >
        @include('navtab.codes.customize.model')
    </div>

    <div class="tab-pane fade"
        id="nav-config-customize"
        role="tabpanel"
        aria-labelledby="nav-config-tab-customize"
    >
        @include('navtab.codes.customize.config')
    </div>

    <div class="tab-pane fade"
        id="nav-output-customize"
        role="tabpanel"
        aria-labelledby="nav-output-tab-customize"
    >
        <br>
        @include('navtab.output.customize.laratable')
    </div>
</div>
