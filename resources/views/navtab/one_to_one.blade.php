<nav>
    <div class="nav nav-tabs" id="nav-tab-one-to-one" role="tablist">

        <a class="nav-item nav-link active"
            id="nav-image-tab-one-to-one"
            data-toggle="tab"
            href="#nav-image-one-to-one"
            role="tab"
            aria-controls="nav-image"
            aria-selected="false"
        >
            ScreenShots
        </a>

        <a class="nav-item nav-link"
            id="nav-client-tab-one-to-one"
            data-toggle="tab"
            href="#nav-client-one-to-one"
            role="tab"
            aria-controls="nav-client"
            aria-selected="false"
        >
            Client Side
        </a>

        <a class="nav-item nav-link"
            id="nav-model-tab-one-to-one"
            data-toggle="tab"
            href="#nav-model-one-to-one"
            role="tab"
            aria-controls="nav-model"
            aria-selected="false"
        >
            Model
        </a>

        <a class="nav-item nav-link"
            id="nav-controller-tab-one-to-one"
            data-toggle="tab"
            href="#nav-controller-one-to-one"
            role="tab"
            aria-controls="nav-controller"
            aria-selected="false"
        >
            Controller
        </a>

        <a class="nav-item nav-link"
            id="nav-output-tab-one-to-one"
            data-toggle="tab"
            href="#nav-output-one-to-one"
            role="tab"
            aria-controls="nav-output"
            aria-selected="false"
        >
            Output
        </a>

    </div>
</nav>
<div class="tab-content" id="nav-tabContent-one-to-one">
    <div class="tab-pane fade show active"
        id="nav-image-one-to-one"
        role="tabpanel"
        aria-labelledby="nav-image-tab"
    >

        @include('navtab.screenshots.oneToOne.images')

    </div>

    <div class="tab-pane fade"
        id="nav-client-one-to-one"
        role="tabpanel"
        aria-labelledby="nav-client-tab"
    >

        @include('navtab.codes.oneToOne.client')

    </div>

    <div class="tab-pane fade"
        id="nav-model-one-to-one"
        role="tabpanel"
        aria-labelledby="nav-model-tab"
    >

        @include('navtab.codes.oneToOne.model')

    </div>

    <div class="tab-pane fade"
        id="nav-controller-one-to-one"
        role="tabpanel"
        aria-labelledby="nav-controller-tab"
    >

        @include('navtab.codes.oneToOne.controller')

    </div>

    <div class="tab-pane fade"
        id="nav-output-one-to-one"
        role="tabpanel"
        aria-labelledby="nav-output-tab"
    >

        <br>
        @include('navtab.output.oneToOne.laratable')

    </div>
</div>
